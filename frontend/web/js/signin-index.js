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
                console.log(result)
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
