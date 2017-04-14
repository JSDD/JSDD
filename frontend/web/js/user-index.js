//编辑用户信息***********************************************************************************************************
$(function () {
    $(document).on("click", "#edit-btn", function () {
        var em    = $(".edit-input em")
        var input = $(".edit-input input")
        em.hide()
        input.show()

        for(var i=0; i<em.length; i++){
            if(em.eq(i).html() != "暂无"){
                input.eq(i).val(em.eq(i).html())
            }else{
                input.eq(i).attr("placeholder", "暂无")
            }
        }
        input.eq(0).focus()

        $("#edit-btn").hide()
        $("#submit-btn").show()
        $("#cansel-btn").show()
    })

    $(document).on("click", "#cansel-btn", function () {
        var em    = $(".edit-input em")
        var input = $(".edit-input input")
        em.show()
        input.hide()

        $("#edit-btn").show()
        $("#submit-btn").hide()
        $("#cansel-btn").hide()
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
