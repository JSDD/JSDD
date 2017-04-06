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
    <link rel="stylesheet" href="<?=Url::to('@web/css/signin-index.css')?>"/>

    <!--js-->
    <script rel="stylesheet" src="<?=Url::to('@web/js/jquery/jquery-1.8.3.min.js')?>"></script>
    <script rel="stylesheet" src="<?=Url::to('@web/js/functions.js')?>"></script>
</head>
<body>

<div id="main">
    <div class="main-center">
        <div class="title">
            <a href="<?=Url::to(['index/index'])?>">LOGO</a>
        </div>
        <div class="signin-form">
            <div>
                <input type="text" placeholder="用户名">
            </div>
            <div>
                <input type="password" placeholder="密码">
            </div>
            <div class="confirm-code">
                <input type="text" placeholder="验证码">
                <img src="" alt="">
            </div>
            <div>
                <a href="">注册</a>
                <button>登录</button>
                <i class="clear"></i>
            </div>
        </div>
        <div class="goback-index">
            <a href="<?=Url::to(['index/index'])?>">返回首页</a>
        </div>
    </div>
</div>

</body>
</html>