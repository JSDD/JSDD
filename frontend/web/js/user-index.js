//编辑用户信息***********************************************************************************************************
$(function () {
    $(document).on("click", "#edit-btn", function () {
        $(".hide-input").show()
        $(".hide-input").siblings("em").hide()
        $("#cansel-btn").show()
        $("#submit-btn").show()
        $("#edit-btn").hide()

        var oldName     = $("#old-name").html()
        var oldNickname = $("#old-nickname").html()
        var oldSex      = $("#old-sex").html()
        var oldAddress  = $("#old-address").html()
        var oldBirthday = $("#old-birthday").html()
        var oldRemarks  = $("#old-remarks").html()

        if(oldName != "暂无"){
            $("#name").val(oldName)
        }
        if(oldNickname != "暂无"){
            $("#nickname").val(oldNickname)
        }
        if(oldSex == "女"){
            $("#woman").attr("checked", true)
        }else{
            $("#man").attr("checked", true)
        }
        if(oldAddress != "暂无"){
            var oldProvince = oldAddress.split("-")[0]
            var oldCity     = oldAddress.split("-")[1]
            var oldArea     = oldAddress.split("-")[2]
            $("#province").val(oldProvince)
            $("#city").val(oldCity)
            $("#area").val(oldArea)
        }
        if(oldBirthday != "暂无"){
            var oldYear  = oldBirthday.split("-")[0]
            var oldMonth = oldBirthday.split("-")[1]
            var oldDay   = oldBirthday.split("-")[2]
            $("#province").val(oldProvince)
            $("#city").val(oldCity)
            $("#area").val(oldArea)
        }
        if(oldRemarks != "暂无"){
            $("#remarks").val(oldRemarks)
        }
    })

    $(document).on("click", "#cansel-btn", function () {
        $(".hide-input").hide()
        $(".hide-input").siblings("em").show()
        $("#cansel-btn").hide()
        $("#submit-btn").hide()
        $("#edit-btn").show()
    })
	
	$(document).on("click", "#submit-btn", function(){
        var name     = $("#name").val()
        var nickname = $("#nickname").val()
        var sex      = $("#sex").val()
        var address  = $("#address").val()
        var birthday = $("#birthday").val()
        var remarks  = $("#remarks").val()
	})
})
