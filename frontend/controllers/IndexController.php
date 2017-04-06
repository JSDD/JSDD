<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;

class IndexController extends Controller {
    public $layout = "defaultLayout";

	public function actionIndex() {

        return $this->render("index");
	}
}