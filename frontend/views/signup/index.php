<?php
use yii\helpers\Url;
?>

<!doctype html>
<html lang="en">
<head>
    <title>JSDD</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--css-->
    <link rel="stylesheet" href="<?=Url::to('@web/bootstrap-3.3.7-dist/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?=Url::to('@web/css/default.css')?>"/>
    <link rel="stylesheet" href="<?=Url::to('@web/css/defaultLayout.css')?>"/>
    <link rel="stylesheet" href="<?=Url::to('@web/css/signup-index.css')?>"/>

    <!--js-->
    <script rel="stylesheet" src="<?=Url::to('@web/js/jquery/jquery-1.8.3.min.js')?>"></script>
    <script rel="stylesheet" src="<?=Url::to('@web/js/functions.js')?>"></script>
    <script rel="stylesheet" src="<?=Url::to('@web/js/signup-index.js')?>"></script>
    <script rel="stylesheet" src="<?=Url::to('@web/js/tools.js')?>"></script>
</head>
<body>

<div id="path">
    <div class="path-center">
        <ul>
            <li>
                <a href="#">首页</a>
                <i class="glyphicon glyphicon-chevron-right"></i>
            </li>
            <li>
                <a href="#">账号注册</a>
            </li>
            <i class="clear"></i>
        </ul>
    </div>
</div>

<div id="main">
    <div class="main-center">
        <div class="title">
            <em>注册表单</em>
        </div>
        <div class="signup-form">
            <div class="input-box">
                <div>邮箱</div>
                <input id="email" class="input-text" type="text" placeholder="请填写有效电子邮箱地址">
                <input id="csrfToken" type="hidden" value="<?= Yii::$app->getRequest()->getCsrfToken()?>">
                <span></span>
            </div>
            <div class="input-box">
                <div>密码</div>
                <input id="password" class="input-text" type="password" placeholder="登录密码（6-18个字符长度）">
                <span></span>
            </div>
            <div class="input-box">
                <div>确认密码</div>
                <input id="repassword" class="input-text" type="password" placeholder="确认密码（与“登录密码”保持一致）">
                <span></span>
            </div>
            <div class="input-box">
                <div>手机号</div>
                <input id="phone" class="input-text" type="text" placeholder="请填写有效手机号码（11个字符长度）">
                <span></span>
            </div>
            <div class="input-box">
                <div>验证码</div>
                <input id="captcha" class="input-text" type="text" placeholder="请填写验证码">
                <img id="captcha-img" src="<?=Url::to(['signup/captcha'])?>" alt="点击刷新">
                <span></span>
            </div>
            <div class="input-box">
                <div></div>
                <button id="submit-btn">提交</button>
                <button id="reset-btn">重置</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
