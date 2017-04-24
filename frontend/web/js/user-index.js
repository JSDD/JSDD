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
            addressInit("province", "city", "area", oldProvince, oldCity, oldArea)
        }
        if(oldBirthday != "暂无"){
            var oldYear  = oldBirthday.split("-")[0]
            var oldMonth = oldBirthday.split("-")[1]
            var oldDay   = oldBirthday.split("-")[2]
            new YMDselect("year", "month", "day", oldYear, oldMonth, oldDay)
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
	    var id        = $("#id").val()
        var name      = $("#name").val()
        var nickname  = $("#nickname").val()
        var sex       = $("input[name='sex']:checked").val()
        var address   = $("#province").val() + "-" + $("#city").val() + "-" + $("#area").val()
        var birthday  = $("#year").val() + "-" + $("#month").val() + "-" + $("#day").val()
        var remarks   = $("#remarks").val()
        var csrfToken = $("#csrfToken").val()
        var sendData  = {id:id, name:name, nickname:nickname, sex:sex, address:address, birthday:birthday, remarks:remarks, csrfToken:csrfToken}

        if(!nickname){
            alert("“昵称”不能为空")
            return false
        }
        if(nickname.length >= 10){
            alert("“昵称”不能超过10个字符长度")
            return false
        }
        if(name.length >= 6){
            alert("“真实姓名”不能超过6个字符长度")
            return false
        }

        submit(sendData)
	})
})

//更新头像
$(function () {
    //显示上传表单
    $(document).on("click", "#headimg-update-btn", function () {
        $("#update-headimg-box").fadeIn(200)
    })
    //预览图片
    $(document).on("change", "#update-headimg-input", function () {
        var fileObj = $(this)[0].files[0]
        if(fileObj){
            $("#update-headimg-img").attr("src", getObjectURL(fileObj))
        }
    })
    //取消上传
    $(document).on("click", "#update-headimg-cancel", function () {
        $("#update-headimg-box").fadeOut(200)
        $("#update-headimg-img").attr("src", "")
    })
    //提交图片
    $(document).on("click", "#update-headimg-confirm", function () {
        var file = $("#update-headimg-input")[0].files[0]
        var csrfToken = $("#csrfToken").val()
        if(!file){
            $("#update-headimg-msg").html("请选择上传文件")
            return
        }
        if(file.size >= 100*1024){
            $("#update-headimg-msg").html("文件大小不能超过100Kb")
            return
        }

        var sendData = new FormData()
        sendData.append("csrfToken", csrfToken)
        sendData.append("file", file)
        submitHeadImg(sendData)
    })
})

//functions*************************************************************************************************************
/**
 * 提交修改信息
 */
function submit(sendData) {
    $.ajax({
        url:"index.php?r=user/edit-info",
        type:"post",
        dataType:"json",
        async:true,
        data:sendData,
        success:function (result) {
            if(result.code == "success"){
                Tools.BufferBox.hide("更新成功", 1000)

                $(".hide-input").hide()
                $(".hide-input").siblings("em").show()
                $("#cansel-btn").hide()
                $("#submit-btn").hide()
                $("#edit-btn").show()

                $("#old-name").html(result.data.name?result.data.name:"暂无")
                $("#old-nickname").html(result.data.nickname)
                $("#old-sex").html(result.data.sex?"男":"女")
                $("#old-address").html(result.data.address)
                $("#old-birthday").html(result.data.birthday)
                $("#old-remarks").html(result.data.remarks?result.data.remarks:"暂无")
                $(".base-info").children("div").eq(0).html(result.data.nickname)
                $("#header .control .user-info > .name > a").html(result.data.nickname)
            }else{
                Tools.BufferBox.hide("更新失败", 1000)
            }
        }
    })
    Tools.BufferBox.show("正在更新了数据")
}

/**
 * 提交上传的图片
 */
function submitHeadImg(sendData) {
    $.ajax({
        url : "index.php?r=user/head-img",
        type : 'post',
        data : sendData,
        processData : false,
        contentType : false,
        success : function(result) {
            alert(result)
        }
    })
}