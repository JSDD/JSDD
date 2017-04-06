<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;

class SigninController extends Controller {
    public $layout = false;

    public function actionIndex(){
        return $this->render("index");
    }
}