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
            $returnUser = $user->toArray();
            $returnUser["birthday"] = Yii::$app->request->post("birthday");
            return json_encode(["code"=>"success", "data"=>$returnUser]);
        }else{
            return json_encode(["code"=>"success"]);
        }
    }

    public function actionHeadImg(){
	    $file        = $_FILES["file"];
	    $fileType    = $file["type"];
	    $fileTmpName = $file["tmp_name"];
	    $userEmail   = Yii::$app->session->get("user")["email"];
        $savePath    = "../web/images/headimg/".$userEmail.".".explode("/", $fileType)[1];

        $user = User::find($userEmail)->one();
        $user["headimg"] = "/JSDD/frontend/web/images/headimg/".$userEmail.".".explode("/", $fileType)[1];

        if($user->save()){
            move_uploaded_file($fileTmpName, $savePath);
            return json_encode(["code"=>"success"]);
        }

	    return json_encode(["code"=>"fail"]);
    }
}