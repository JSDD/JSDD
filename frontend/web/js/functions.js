/**
 * E-mail 格式验证
 * @param email
 */
function checkEmail(email) {
    var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/
    if(!myreg.test(email)){
        return false
    }else{
        return true
    }
}

/**
 * 手机号码 格式验证
 * @param phone
 */
function checkPhone(phone) {
    var myreg = /^1[3,5,8]\d{9}$/
    if(!myreg.test(phone)){
        return false
    }else{
        return true
    }
}

/**
 * 缓冲动画
 */
function bufferBox(msg) {
    var bufferBoxCss = "position:fixed;width:100%;height:100%;"
    var bufferCenterBoxCss = "background:#ffffff;width:240px;height:100px;border-radius:10px;overflow:hidden;margin:20% auto;box-shadow:0 5px 20px rgba(0,0,0,0.3)"
    var bufferImgCss = "width:100px;height:100px;"
    var bufferTextCss = "height:100px;text-align:center;color:#666666;"
    var bufferBoxHtml = ""
        + "<div id='buffer-box' style='"+bufferBoxCss+"'>"
        + "<div style='"+bufferCenterBoxCss+"'>"
        + "<img style='"+bufferImgCss+"' src='../web/images/loading.gif' alt=''>"
        + "<span style='"+bufferTextCss+"'>"+msg+"</span>"
        + "</div>"
        + "</div>"
    $("body").prepend(bufferBoxHtml)
    return "buffer-box"
}