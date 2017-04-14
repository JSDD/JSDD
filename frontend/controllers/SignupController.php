<?php
namespace frontend\controllers;
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

    public function actionValidate()
    {
        $User = new User();
        $email = Yii::$app->request->post("email");
        $password = Yii::$app->request->post("password");
        $phone = Yii::$app->request->post("phone");
        $captchaInput = Yii::$app->request->post("captcha");
        $captchaSession = Yii::$app->session->get("__captcha/signup/captcha");

        if ($User->find()->where(["email"=>$email])->one()) {
            return json_encode(["code" => "userExist"]);
        }

        if ($captchaSession !== $captchaInput) {
            return json_encode(["code" => "captchaError"]);
        }

        $User->email      = $email;
        $User->nickname   = $email;
        $User->password   = md5($password);
        $User->phone      = $phone;
        $User->creat_time = time();
        $User->headimg    = "/JSDD/frontend/web/images/temp-img1.jpg";
        $User->sex        = 0;

        if ($User->save() == true) {
            return json_encode(["code" => "success"]);
        } else {
            return json_encode(["code" => "insertError"]);
        }
    }

}
