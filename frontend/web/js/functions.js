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