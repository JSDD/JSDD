/**
 * 工具库
 * @type {string}
 */
var Tools =
{
    /**
     * 全屏缓冲动画
     */
    BufferBox:
    {
        boxId       :"BufferBox",
        boxCss      :"position:fixed;width:100%;height:100%;",
        centerBoxCss:"background:#ffffff;width:240px;height:100px;border-radius:10px;overflow:hidden;margin:20% auto;box-shadow:0 5px 20px rgba(0,0,0,0.3)",
        imgCss      :"width:100px;height:100px;",
        msgCss      :"display:inline-block;width:140px;text-align:center;color:#666666;",
        message     :"loading",
        imgUrl      :"../web/images/loading.gif",
        html        :"",

        generate:function(message)
        {
            this.html =  "<div id='"+ this.boxId +"' style='"+this.boxCss+"'>"
                        +"<div style='"+ this.centerBoxCss +"'>"
                        +"<img src='"+ this.imgUrl +"' style='"+ this.imgCss +"'>"
                        +"<span style='"+ this.msgCss +"'>"+ message +"</span>"
                        +"</div>"
                        +"</div>"
        },
        show:function(message)
        {
            this.generate(message)
            $("body").prepend(this.html)
        },
        hide:function(endMsg, time)
        {
            var boxId = this.boxId
            if(endMsg || time){
                $("#"+this.boxId).children("div").children("span").html(endMsg)
                setTimeout(function(){
                    $("#"+boxId).remove()
                }, time)
            }else{
                $("#"+boxId).remove()
            }
        },
    },

}

