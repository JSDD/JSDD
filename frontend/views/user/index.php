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
    <link rel="stylesheet" href="<?=Url::to('@web/css/user-index.css')?>"/>

    <!--js-->
    <script rel="stylesheet" src="<?=Url::to('@web/js/jquery/jquery-1.8.3.min.js')?>"></script>
    <script rel="stylesheet" src="<?=Url::to('@web/js/functions.js')?>"></script>
</head>
<body>

<div id="userinfo">
    <div class="userinfo-center">
        <div class="head-img">
            <img src="<?=Url::to('@web/images/temp-img1.jpg')?>" alt="">
        </div>
        <div class="info">
            <div class="base-info">
                <div>NickName</div>
                <div><em>电子邮箱 ：</em>729199940@qq.com</div>
                <div><em>手机号 ：</em>15201074932</div>
                <button><i class="glyphicon glyphicon-chevron-left"></i> 更换头像</button>
            </div>
            <div class="detail-info">
                <div>
                    <div>params</div>
                    <div>value</div>
                    <i class="clear"></i>
                </div>
                <div>
                    <div>params</div>
                    <div>value</div>
                    <i class="clear"></i>
                </div>
                <div>
                    <div>params</div>
                    <div>value</div>
                    <i class="clear"></i>
                </div>
                <div>
                    <button><i class="glyphicon glyphicon-pencil"></i> 编辑</button>
                </div>
            </div>
        </div>
        <i class="clear"></i>
    </div>
</div>

</body>
</html>