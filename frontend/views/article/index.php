<?php
use yii\helpers\Html;
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
    <link rel="stylesheet" href="<?=Url::to('@web/css/article-index.css')?>"/>

    <!--js-->
    <script rel="stylesheet" src="<?=Url::to('@web/js/jquery/jquery-1.8.3.min.js')?>"></script>
    <script rel="stylesheet" src="<?=Url::to('@web/js/functions.js')?>"></script>
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
                <a href="#">文章列表</a>
                <i class="glyphicon glyphicon-chevron-right"></i>
            </li>
            <li>
                <a href="#">文章</a>
            </li>
            <i class="clear"></i>
        </ul>
    </div>
</div>

<div id="main">
    <div class="main-center">
        <div class="title">
            <em>LIST OF ARTICLES</em>
            <i class="glyphicon glyphicon-align-justify"></i>
        </div>
        <ul class="articles-list">
            <li>
                <a href="<?=Url::to(['article/article'])?>"></a>
                <div class="article-info">
                    <em><a href="<?=Url::to(['article/article'])?>">This article title</a></em>
                    <p>This article content This article content This article content This article content</p>
                    <div class="article-attr">
                        <div class="reading-amount"><i class="glyphicon glyphicon-eye-open"></i> <b>199</b></div>
                        <div class="reading-comment"><i class="glyphicon glyphicon-thumbs-up"></i> <b>89</b></div>
                        <div class="reading-collect"><i class="glyphicon glyphicon-heart"></i> <b>89</b></div>
                        <div class="set-comment"><i class="glyphicon glyphicon-thumbs-up"></i> 点赞</div>
                        <div class="set-collect"><i class="glyphicon glyphicon-heart"></i> 收藏</div>
                    </div>
                </div>
                <i class="clear"></i>
            </li>
            <li>
                <a href=""></a>
                <div class="article-info">
                    <em><a href="">This article title</a></em>
                    <p>This article content This article content This article content This article content</p>
                    <div class="article-attr">
                        <div class="reading-amount"><i class="glyphicon glyphicon-eye-open"></i> <b>199</b></div>
                        <div class="reading-comment"><i class="glyphicon glyphicon-thumbs-up"></i> <b>89</b></div>
                        <div class="reading-collect"><i class="glyphicon glyphicon-heart"></i> <b>89</b></div>
                        <div class="set-comment"><i class="glyphicon glyphicon-thumbs-up"></i> 点赞</div>
                        <div class="set-collect"><i class="glyphicon glyphicon-heart"></i> 收藏</div>
                    </div>
                </div>
                <i class="clear"></i>
            </li>
            <li>
                <a href=""></a>
                <div class="article-info">
                    <em><a href="">This article title</a></em>
                    <p>This article content This article content This article content This article content</p>
                    <div class="article-attr">
                        <div class="reading-amount"><i class="glyphicon glyphicon-eye-open"></i> <b>199</b></div>
                        <div class="reading-comment"><i class="glyphicon glyphicon-thumbs-up"></i> <b>89</b></div>
                        <div class="reading-collect"><i class="glyphicon glyphicon-heart"></i> <b>89</b></div>
                        <div class="set-comment"><i class="glyphicon glyphicon-thumbs-up"></i> 点赞</div>
                        <div class="set-collect"><i class="glyphicon glyphicon-heart"></i> 收藏</div>
                    </div>
                </div>
                <i class="clear"></i>
            </li>
            <li>
                <a href=""></a>
                <div class="article-info">
                    <em><a href="">This article title</a></em>
                    <p>This article content This article content This article content This article content</p>
                    <div class="article-attr">
                        <div class="reading-amount"><i class="glyphicon glyphicon-eye-open"></i> <b>199</b></div>
                        <div class="reading-comment"><i class="glyphicon glyphicon-thumbs-up"></i> <b>89</b></div>
                        <div class="reading-collect"><i class="glyphicon glyphicon-heart"></i> <b>89</b></div>
                        <div class="set-comment"><i class="glyphicon glyphicon-thumbs-up"></i> 点赞</div>
                        <div class="set-collect"><i class="glyphicon glyphicon-heart"></i> 收藏</div>
                    </div>
                </div>
                <i class="clear"></i>
            </li>
            <li>
                <a href=""></a>
                <div class="article-info">
                    <em><a href="">This article title</a></em>
                    <p>This article content This article content This article content This article content</p>
                    <div class="article-attr">
                        <div class="reading-amount"><i class="glyphicon glyphicon-eye-open"></i> <b>199</b></div>
                        <div class="reading-comment"><i class="glyphicon glyphicon-thumbs-up"></i> <b>89</b></div>
                        <div class="reading-collect"><i class="glyphicon glyphicon-heart"></i> <b>89</b></div>
                        <div class="set-comment"><i class="glyphicon glyphicon-thumbs-up"></i> 点赞</div>
                        <div class="set-collect"><i class="glyphicon glyphicon-heart"></i> 收藏</div>
                    </div>
                </div>
                <i class="clear"></i>
            </li>
            <li>
                <a href=""></a>
                <div class="article-info">
                    <em><a href="">This article title</a></em>
                    <p>This article content This article content This article content This article content</p>
                    <div class="article-attr">
                        <div class="reading-amount"><i class="glyphicon glyphicon-eye-open"></i> <b>199</b></div>
                        <div class="reading-comment"><i class="glyphicon glyphicon-thumbs-up"></i> <b>89</b></div>
                        <div class="reading-collect"><i class="glyphicon glyphicon-heart"></i> <b>89</b></div>
                        <div class="set-comment"><i class="glyphicon glyphicon-thumbs-up"></i> 点赞</div>
                        <div class="set-collect"><i class="glyphicon glyphicon-heart"></i> 收藏</div>
                    </div>
                </div>
                <i class="clear"></i>
            </li>
            <li>
                <a href=""></a>
                <div class="article-info">
                    <em><a href="">This article title</a></em>
                    <p>This article content This article content This article content This article content</p>
                    <div class="article-attr">
                        <div class="reading-amount"><i class="glyphicon glyphicon-eye-open"></i> <b>199</b></div>
                        <div class="reading-comment"><i class="glyphicon glyphicon-thumbs-up"></i> <b>89</b></div>
                        <div class="reading-collect"><i class="glyphicon glyphicon-heart"></i> <b>89</b></div>
                        <div class="set-comment"><i class="glyphicon glyphicon-thumbs-up"></i> 点赞</div>
                        <div class="set-collect"><i class="glyphicon glyphicon-heart"></i> 收藏</div>
                    </div>
                </div>
                <i class="clear"></i>
            </li>
        </ul>
    </div>
</div>

<div id="paging">
    <div class="paging-center" aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</div>

</body>
</html>