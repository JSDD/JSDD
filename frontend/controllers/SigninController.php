<?php
namespace frontend\controllers;
use yii\web\Controller;
use common\models\User;
use Yii;

class SigninController extends Controller {
    public $layout = false;

    public function actions()
    {
        return [
            "captcha" => [
                "class" => 'yii\captcha\CaptchaAction',
                "maxLength" => 4,
                "minLength" => 4,
                "backColor" => 0xEEEEEE,
            ]
        ];
    }

    public function actionIndex(){
        return $this->render("index");
    }

    public function actionValidate(){
        $session        = Yii::$app->session;
        $emailInput     = Yii::$app->request->post("email");
        $passwordInput  = Yii::$app->request->post("password");
        $captchaInput   = Yii::$app->request->post("captcha");
        $captchaSession = $session->get("__captcha/signin/captcha");

        $User           = new User();
        $userInfo       = $User->find()->where(["email"=>$emailInput])->one();
        $emailData      = $userInfo["email"];
        $passwordData   = $userInfo["password"];

        if($captchaInput != $captchaSession){
            return json_encode(["code"=>"captchaError"]);
        }
        if(count($userInfo) < 1){
            return json_encode(["code"=>"notExist"]);
        }
        if(md5($passwordInput) != $passwordData){
            return json_encode(['code'=>"passwordError"]);
        }
        
        $session->set("user", ["email" => $emailData]);
        
        if($session["user"]["email"]){
            return json_encode(["code" => "success"]);
        }
    }
}
