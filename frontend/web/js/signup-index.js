$(function () {
    //流程**************************************************************************************************************
    //提交注册信息
    $(function () {
        $(document).on("click", "#submit-btn", function () {
            var requestDB      = {}
            var email          = $("#email").val()
            var emailPass      = false
            var password       = $("#password").val()
            var passwordPass   = false
            var repassword     = $("#repassword").val()
            var repasswordPass = false
            var phone          = $("#phone").val()
            var phonePass      = false
            var captcha        = $("#captcha").val()
            var captchaPass    = false
            var csrfToken      = $("#csrfToken").val()

            //E-mail 验证
            if(checkEmail(email)){
                promptMsg("email", true, "通过")
                emailPass = true
            }else{
                if(email == ""){
                    promptMsg("email", false, "E-mail 不能为空")
                }else{
                    promptMsg("email", false, "E-mail 格式不正确，请重新输入")
                }
                promptMsg("email", false, "E-mail 格式不正确，请重新输入")
                emailPass = false
            }

            //password 验证
            if(password.length >= 6 && password.length <= 18){
                promptMsg("password", true, "通过")
                passwordPass = true
            }else{
                if(password == ""){
                    promptMsg("password", false, "密码不能为空")
                }else{
                    promptMsg("password", false, "密码长度不符合要求")
                }
                passwordPass = false
            }

            //repassword 验证
            if(passwordPass){
                if(password == repassword){
                    promptMsg("repassword", true, "通过")
                    repasswordPass = true
                }else{
                    if(repassword == ""){
                        promptMsg("repassword", false, "确认密码不能为空")
                    }else{
                        promptMsg("repassword", false, "两次密码不匹配")
                    }
                    repasswordPass = false
                }
            }

            //phone 验证
            if(checkPhone(phone)){
                promptMsg("phone", true, "通过")
                phonePass = true
            }else{
                if(phone == ""){
                    promptMsg("phone", false, "手机号码不能为空")
                }else{
                    promptMsg("phone", false, "手机号格式不正确")
                }
                phonePass = false
            }

            //提交
            if(emailPass && passwordPass && repasswordPass && phonePass){
                requestDB.email     = email
                requestDB.password  = password
                requestDB.phone     = phone
                requestDB.captcha   = captcha
                requestDB.csrfToken = csrfToken
                submit(requestDB)
            }
        })

        //刷新验证码
        $(function () {
            $(document).on("click", "#captcha-img", function () {
                $.ajax({
                    url:"index.php?r=signup/captcha",
                    type:"get",
                    dataType:"json",
                    data:{refresh:1},
                    async:false,
                        success:function (result) {
                        $("#captcha-img").attr("src", result.url)
                    },
                    error:function () {
                        alert("error")
                    }
                })
            })
        })

    })

    //functions*********************************************************************************************************
    /**
     * 提交注册信息fucntion
     */
    function submit(requestDB) {
        $.ajax({
            url:"index.php?r=signup/validate",
            type:"post",
            dataType:"json",
            async:true,
            data:requestDB,
            success:function(result){
                if(result.code == "captchaError"){
                    $("#captcha-img").siblings("span").html("验证码错误")
                    $("#captcha-img").siblings("span").css("color", "F44D27")
                }
                else if(result.code == "insertError"){
                    alert("注册失败")
                }else{
                    Tools.BufferBox.hide("注册成功")
                    setTimeout(function(){
                        window.location = "index.php?r=signin/index"
                    }, 1000)
                }
            }
        })
        Tools.BufferBox.show("正在申请注册···")
    }

    /**
     * 提示验证结果
     * @param field 验证的字段
     * @param isPass 是否通过
     * @param msg 提示信息
     */
    function promptMsg(field, isPass, msg) {
        if(isPass){
            $("#"+field).siblings("span").html(msg)
            $("#"+field).siblings("span").css("color", "#51C332")
        }else{
            $("#"+field).siblings("span").html(msg)
            $("#"+field).siblings("span").css("color", "F44D27")
        }
    }
})