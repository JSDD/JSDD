 //流程**************************************************************************************************************
//提交登录信息
$(function () {
    $(document).on("click", "#submit-btn", function () {
        var email     = $("#email").val()
        var password  = $("#password").val()
        var captcha   = $("#captcha").val()
        var csrfToken = $("#csrf-token").val()
        var sendData  = {email:email, password:password, captcha:captcha, csrfToken:csrfToken}

        $.ajax({
            url:"index.php?r=signin/validate",
            type:"post",
            dataType:"json",
            async:false,
            data:sendData,
            success:function (result) {
                if(result.code == "captchaError"){
                    $(".signin-form").children("div").children("span").html("")
                    $("#captcha-img").siblings("span").html("验证码错误")
                    $("#captcha-img").siblings("span").css("color", "red")
		        }else if(result.code == "emailError"){
                    $(".signin-form").children("div").children("span").html("")
                    $("#email").siblings("span").html("账号不存在")
                    $("#email").siblings("span").css("color", "red")
                }else if(result.code == "passwordError"){
                    $(".signin-form").children("div").children("span").html("")
		            $("#password").siblings("span").html("密码不正确")
                    $("#password").siblings("span").css("color", "red")
                }else if(result.code == "success"){
                    $(".signin-form").children("div").children("span").html("")
                    window.location.href = "index.php?r=index/index"
                }
            }
        })
    })
})

//刷新验证码
$(function () {
    $(document).on("click", "#captcha-img", function () {
        $.ajax({
            url:"index.php?r=signin/captcha",
            type:"get",
            dataType:"json",
            async:false,
            data:{refresh:1},
            success:function (result) {
                $("#captcha-img").attr("src", result.url)
            }
        })
    })
})

//functions*********************************************************************************************************
/**
 * function name
 */
