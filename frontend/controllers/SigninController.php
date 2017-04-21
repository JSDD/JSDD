<?php
namespace frontend\controllers;
use yii\web\Controller;
use common\models\User;
use Yii;

class SigninController extends Controller {
    public $layout = "defaultLayout";

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
        if(Yii::$app->session["user"]){
            $this->redirect(["index/index"]);
        }
        return $this->render("index");
    }

    public function actionValidate(){
        $session        = Yii::$app->session;
        $emailInput     = Yii::$app->request->post("email");
        $passwordInput  = Yii::$app->request->post("password");
        $captchaInput   = Yii::$app->request->post("captcha");
        $captchaSession = $session->get("__captcha/signin/captcha");
        $User           = new User();
        $user           = $User->find()->where(["email"=>$emailInput])->one();

        if($captchaInput != $captchaSession){
            return json_encode(["code"=>"captchaError"]);
        }
        if(count($user) < 1){
            return json_encode(["code"=>"emailError"]);
        }
        if(md5($passwordInput) != $user["password"]){
            return json_encode(['code'=>"passwordError"]);
        }

        $user["last_time"] = time();
        if($user->save()){
            $session->set("user", $user->toArray());
            return json_encode(["code" => "success"]);
        }else{
            return json_encode(["code" => "signinError"]);
        }

    }

    public function actionOut(){
        unset(Yii::$app->session["user"]);
        $this->redirect(["index/index"]);
    }
}
