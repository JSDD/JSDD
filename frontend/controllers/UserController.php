<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;

class UserController extends Controller {
    public $layout = "defaultLayout";

	public function actionIndex() {
	    if(!Yii::$app->session->get("user")){
	        $this->redirect(["signin/index"]);
        }
        return $this->render("index");
	}

	public function actionEditInfo(){

    }
}
