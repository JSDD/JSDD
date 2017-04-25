<?php
namespace frontend\controllers;
use yii\web\Controller;
use common\models\User;
use yii\web\UploadedFile;
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
	    $id       = Yii::$app->request->post("id");
	    $name     = Yii::$app->request->post("name");
        $nickname = Yii::$app->request->post("nickname");
        $sex      = Yii::$app->request->post("sex");
        $address  = Yii::$app->request->post("address");
        $birthday = strtotime(Yii::$app->request->post("birthday"));
        $remarks  = Yii::$app->request->post("remarks");

        $session = Yii::$app->session;
        $user = User::find($id)->one();
        $user["name"]     = $name;
        $user["nickname"] = $nickname;
        $user["sex"]      = $sex;
        $user["address"]  = $address;
        $user["birthday"] = $birthday;
        $user["remarks"]  = $remarks;

        if($user->save()){
            $session->set("user", $user->toArray());
            $returnUser = $session["user"];
            $returnUser["birthday"] = Yii::$app->request->post("birthday");
            return json_encode(["code"=>"success", "data"=>$returnUser]);
        }else{
            return json_encode(["code"=>"fail"]);
        }
    }

    public function actionUploadHeadimg(){
	    //get data
        $session = Yii::$app->session;
        $user    = User::find($session["user"]["Id"])->one();
        $file    = $_FILES["file"];
        $email   = $session->get("user")["email"];
        $date    = date("Y-m-d-h-i-s", time());

        //make path
        $newFileName = $email."-".$date.".".explode("/", $file["type"])[1];
        $movePath    = "../web/images/headimg/" . $newFileName;
        $returnPath  = "/JSDD/frontend/web/images/headimg/" . $newFileName;

        //save file name
        $user["headimg"] = $newFileName;
        if($user->save()){
            //delete old file
            unlink("../web/images/headimg/" . $session["user"]["headimg"]);
            //save file
            move_uploaded_file($file["tmp_name"], $movePath);
            //init session
            $session->set("user", $user->toArray());
            return json_encode(["code"=>"success", "data"=>["url"=>$returnPath]]);
        }else{
            return json_encode(["code"=>"fail"]);
        }
    }
}