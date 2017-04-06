<?php
use yii\helpers\Url;

//nav active
$controllerName = $this->context->id;
$actionName     = $this->context->action->id;
$navHtml        = "";
//nav list
$navList["index"]   = "首页";
$navList["article"] = "故事厅";

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
                <!--<li><a class="nav-active" href="--><?//=Url::to(['index/index'])?><!--">Home</a></li>-->
                <?=$navHtml?>
            </ul>
            <div class="sign-in">
                <a id="sign-in" href="<?=Url::to(['signin/index'])?>" class="login-btn">登 陆</a>
                <a id="sign-up" href="<?=Url::to(['signup/index'])?>" class="login-btn">注 册</a>
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