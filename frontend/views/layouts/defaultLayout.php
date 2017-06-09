<?php
use yii\helpers\Url;
use yii\base\Widget;
use frontend\widgets\HeadNav;
use frontend\widgets\HeadUser;

$activeUrl = Yii::$app->controller->id ."/". Yii::$app->controller->action->id;
?>

<div id="header">
    <div class="header-center">
        <div class="head-logo">
            <a href="<?=Url::to(['index/index'])?>" class="logo">LOGO</a>
        </div>
        <div class="head-nav">
            <?=HeadNav::widget(["className"=>"head-nav-ul", "activeUrl"=>$activeUrl])?>
        </div>
        <div class="head-user">
            <div class="head-user-img">
                <a href="">
                    <img src="<?=Url::to('@common/images/default-header-img.png')?>" alt="">
                </a>
            </div>
            <div class="head-user-login">
                <a href="">登录</a>
                <a href="">注册</a>
            </div>
            <div class="head-user-nickname">
                <a href="">僵尸顶顶</a>
            </div>
        </div>
    </div>
</div>

<?= $content ?>

<div id="footer">
    <div class="footer-center">
        FOOT
    </div>
</div>