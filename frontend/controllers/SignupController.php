<?php
namespace frontend\controllers;
use yii\helpers\Url;
use yii\web\Controller;
use common\models\User;
use Yii;

class SignupController extends Controller {
    public $layout = "defaultLayout";

    public function actions()
    {
        return [
            "captcha" => [
                "class" => 'yii\captcha\captchaAction',
                "maxLength" => 4,
                "minLength" => 4,
            ],
        ];
    }

    public function actionIndex(){
        return $this->render("index");
    }

    public function actionValidate(){
        $User           = new User();
        $email          = Yii::$app->request->post("email");
        $password       = Yii::$app->request->post("password");
        $phone          = Yii::$app->request->post("phone");
        $captchaInput   = Yii::$app->request->post("captcha");
        $captchaSession = Yii::$app->session->get("__captcha/signup/captcha");

        if($captchaSession === $captchaInput){
            $User->email    = $email;
            $User->password = md5($password);
            $User->phone    = $phone;

            if($User->save() == true){
                return json_encode(["code"=>"success"]);
            }else{
                return json_encode(["code"=>"insertError"]);
            }
        }else{
            return json_encode(["code"=>"captchaError"]);
        }
    }
}