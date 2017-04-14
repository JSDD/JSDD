<?php
use yii\helpers\Url;

$user = Yii::$app->session->get("user");
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
    <script rel="stylesheet" src="<?=Url::to('@web/js/user-index.js')?>"></script>
</head>
<body>

<div id="userinfo">
    <div class="userinfo-center">
        <div class="head-img">
            <img src="<?=$user["headimg"]?>" alt="">
        </div>
        <div class="info">
            <div class="base-info">
                <div><?=$user["nickname"]?$user["nickname"]:$user["email"];?></div>
                <div><em>电子邮箱 ：</em><?=$user["email"]?></div>
                <div><em>手机号 ：</em><?=$user["phone"]?></div>
                <button class="btn"><i class="glyphicon glyphicon-chevron-left"></i> 更换头像</button>
                <a class="btn" href="<?=Url::to(['signin/out'])?>"><i class="glyphicon glyphicon-log-out"></i> 注销</a>
            </div>
            <div class="detail-info">
                <div>
                    <div>真实姓名</div>
                    <div class="edit-input">
                        <em><?=$user["name"]?$user["name"]:"暂无";?></em>
                        <input id="name" type="text">
                    </div>
                    <i class="clear"></i>
                </div>
                <div>
                    <div>昵称</div>
                    <div class="edit-input">
                        <em><?=$user["nickname"]?$user["nickname"]:"暂无";?></em>
                        <input id="nickname" type="text">
                    </div>
                    <i class="clear"></i>
                </div>
                <div>
                    <div>性别</div>
                    <div class="edit-input">
                        <em><?=$user["sex"]?"男":"女";?></em>
                        <input id="sex" type="text">
                    </div>
                    <i class="clear"></i>
                </div>
                <div>
                    <div>所在地</div>
                    <div class="edit-input">
                        <em><?=$user["address"]?$user["address"]:"暂无";?></em>
                        <input id="address" type="text">
                    </div>
                    <i class="clear"></i>
                </div>
                <div>
                    <div>出生日期</div>
                    <div class="edit-input">
                        <em><?=$user["birthday"]?$user["birthday"]:"暂无";?></em>
                        <input id="birthday" type="text">
                    </div>
                    <i class="clear"></i>
                </div>
                <div>
                    <div>备注</div>
                    <div class="edit-input">
                        <em><?=$user["remarks"]?$user["remarks"]:"暂无";?></em>
                        <input id="remarks" type="text">
                    </div>
                    <i class="clear"></i>
                </div>
                <div>
                    <button id="submit-btn"><i class="glyphicon glyphicon-ok"></i> 提交</button>
                    <button id="cansel-btn"><i class="glyphicon glyphicon-remove"></i> 取消</button>
                    <button id="edit-btn"><i class="glyphicon glyphicon-pencil"></i> 编辑</button>
                </div>
            </div>
        </div>
        <i class="clear"></i>
    </div>
</div>

<div id="usernavs">
    <div class="usernavs-center">
        <div class="nav"><i class="glyphicon glyphicon-folder-open"></i> 收藏</div>
        <div class="nav"><i class="glyphicon glyphicon-comment"></i> 动态</div>
    </div>
</div>

<div id="collect">
    <div class="collect-center">
        <div class="collect">
            <a href="#" class="img">
                <img src="" alt="">
            </a>
            <div class="msg">
                <div class="title"><a href="">title</a></div>
                <div class="content">
                    contentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontent
                    contentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontent
                </div>
                <div class="attr">
                    <div><i class="glyphicon glyphicon-eye-open"></i> 199</div>
                    <div><i class="glyphicon glyphicon-thumbs-up"></i> 99</div>
                    <div><i class="glyphicon glyphicon-heart"></i> 109</div>
                </div>
            </div>
            <div class="control">
                <div>移除</div>
                <div>查看</div>
            </div>
            <i class="clear"></i>
        </div>
        <div class="collect">
            <a href="#" class="img">
                <img src="" alt="">
            </a>
            <div class="msg">
                <div class="title"><a href="">title</a></div>
                <div class="content">
                    contentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontent
                    contentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontent
                </div>
                <div class="attr">
                    <div><i class="glyphicon glyphicon-eye-open"></i> 199</div>
                    <div><i class="glyphicon glyphicon-thumbs-up"></i> 99</div>
                    <div><i class="glyphicon glyphicon-heart"></i> 109</div>
                </div>
            </div>
            <div class="control">
                <div>移除</div>
                <div>查看</div>
            </div>
            <i class="clear"></i>
        </div>
        <div class="collect">
            <a href="#" class="img">
                <img src="" alt="">
            </a>
            <div class="msg">
                <div class="title"><a href="">title</a></div>
                <div class="content">
                    contentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontent
                    contentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontentcontent
                </div>
                <div class="attr">
                    <div><i class="glyphicon glyphicon-eye-open"></i> 199</div>
                    <div><i class="glyphicon glyphicon-thumbs-up"></i> 99</div>
                    <div><i class="glyphicon glyphicon-heart"></i> 109</div>
                </div>
            </div>
            <div class="control">
                <div>移除</div>
                <div>查看</div>
            </div>
            <i class="clear"></i>
        </div>
    </div>
</div>

</body>
</html>
