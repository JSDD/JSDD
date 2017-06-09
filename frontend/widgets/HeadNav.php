<?php
namespace frontend\widgets;
use yii\base\Widget;
use yii\helpers\Url;

class HeadNav extends Widget
{
    public $idName = "";
    public $className = "";
    public $html = "";
    public $activeUrl = "";
    public $item = [
        "首页"=>"index/index",
        "文章"=>null,
        "小说"=>null,
        "视频"=>null,
        "Music"=>null,
    ];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $this->html = "<ul class='{$this->className}'>";
        foreach ($this->item as $key=>$value){
            if($this->activeUrl == $value){
                $this->html .= "<li><a class='head-nav-active' href='". Url::to([$value]) ."'>{$key}</a></li>";
            }else{
                $this->html .= "<li><a href='". Url::to([$value]) ."'>{$key}</a></li>";
            }
        }
        $this->html .= "</ul>";
        return $this->html;
    }
}