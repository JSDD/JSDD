<?php
use yii\helpers\Url;

$user  = Yii::$app->session->get("user");
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
                <button class="btn"><i class="glyphicon glyphicon-chevron-left"></i> 更新头像</button>
                <a class="btn" href="<?=Url::to(['signin/out'])?>"><i class="glyphicon glyphicon-log-out"></i> 退出登录</a>
            </div>
            <table class="detail-info">
                <tr>
                    <td>
                        真是姓名
                    </td>
                    <td>
                        <em id="old-name"><?=$user["name"]?$user["name"]:"暂无";?></em>
                        <div class="hide-input">
                            <input id="name" name="name" type="text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        昵称
                    </td>
                    <td>
                        <em id="old-nickname"><?=$user["nickname"]?$user["nickname"]:"暂无";?></em>
                        <div class="hide-input">
                            <input id="nickname" name="nickname" type="text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        性别
                    </td>
                    <td>
                        <em id="old-sex"><?=$user["sex"]?"男":"女";?></em>
                        <div class="hide-input">
                            <label for="woman">
                                <input id="woman" name="sex" type="radio"> 女
                            </label>
                            <label for="man">
                                <input id="man" name="sex" type="radio"> 男
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        所在地
                    </td>
                    <td>
                        <em id="old-address"><?=$user["address"]?$user["address"]:"暂无";?></em>
                        <div class="hide-input">
                            <label for="">
                                <select name="province" id="province">
                                    <option value="河北省">河北省</option>
                                    <option value="北京市">北京市</option>
                                </select>
                                省份
                            </label>
                            <label for="">
                                <select name="city" id="city">
                                    <option value="石家庄">石家庄</option>
                                    <option value="北京市">北京市</option>
                                </select>
                                城市
                            </label>
                            <label for="">
                                <select name="area" id="area">
                                    <option value="石家庄">栾城改</option>
                                    <option value="海淀区">海淀区</option>
                                </select>
                                地区
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        出生日期
                    </td>
                    <td>
                        <em id="old-birthday"><?=$user["birthday"]?date("Y", $user["birthday"])."-".date("m", $user["birthday"])."-".date("d", $user["birthday"]):"暂无";?></em>
                        <div class="hide-input">
                            <label for="year">
                                <select name="year" id="year">
                                    <option value="">2017</option>
                                </select>
                                年
                            </label>
                            <label for="month">
                                <select name="month" id="month">
                                    <option value="">12</option>
                                </select>
                                月
                            </label>
                            <label for="day">
                                <select name="day" id="day">
                                    <option value="">25</option>
                                </select>
                                日
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        备注
                    </td>
                    <td>
                        <em id="old-remarks"><?=$user["remarks"]?$user["remarks"]:"暂无";?></em>
                        <div class="hide-input">
                            <textarea name="remarks" id="remarks" cols="50" rows="2"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button id="submit-btn"><i class="glyphicon glyphicon-ok"></i> 提交</button>
                        <button id="cansel-btn"><i class="glyphicon glyphicon-remove"></i> 取消</button>
                        <button id="edit-btn"><i class="glyphicon glyphicon-pencil"></i> 编辑</button>
                    </td>
                </tr>
            </table>
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
