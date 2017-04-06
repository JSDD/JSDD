<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;

class ArticleController extends Controller {
    public $layout = "defaultLayout";

	public function actionIndex() {
        return $this->render("index");
	}

	public function actionArticle(){
	    return $this->render("article");
    }
}