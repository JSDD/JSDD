<?php
use yii\helpers\Url;

//user info
$user = Yii::$app->session->get("user");

//nav active
$controllerName = $this->context->id;
$actionName     = $this->context->action->id;
$navHtml        = "";

//nav list
$navList["index"]   = "首页";
$navList["article"] = "故事厅";
$navList["user"]    = "用户中心";

//遍历 navs
foreach ($navList as $key=>$val) {
    if ($controllerName == $key) {
        $navHtml .= "<li><a class='nav-active' href=". Url::to([$key.'/index']) .">". $val ."</a></li>";
    }else{
        $navHtml .= "<li><a href=". Url::to([$key.'/index']) .">". $val ."</a></li>";
    }
}

?>

<div id="header">
    <div class="header-center">
        <div class="logo">
            LOGO
            <!--<img width="80px" src="--><?//=Url::to('@web/images/logo.png')?><!--" alt="">-->
        </div>
        <div class="control">
            <ul class="navs">
                <?=$navHtml?>
            </ul>
            <?php if($user["email"]){?>
            <div class="user-info">
                <div class="name">
                    <a href="<?=Url::to(['user/index'])?>"><?=$user["nickname"]?$user["nickname"]:$user["email"];?></a>
                </div>
                <a href="<?=Url::to(['user/index'])?>"><img src="<?=$user['headimg']?>"></a>
            </div>
            <?php }else{ ?>
            <div class="sign-in">
                <a id="sign-in" href="<?=Url::to(['signin/index'])?>" class="login-btn">登 陆</a>
                <a id="sign-up" href="<?=Url::to(['signup/index'])?>" class="login-btn">注 册</a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?= $content ?>

<div id="footer">
    <div class="footer-center">
        FOOT
    </div>
</div>