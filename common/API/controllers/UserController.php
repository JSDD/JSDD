<?php
namespace common\API\controllers;

use function foo\func;
use yii\web\Controller;
use Yii;
use common\models\User;

class UserController extends Controller
{
    public $enableCsrfValidation = false;

    //Get user
    function actionGetUsers()
    {
        //is login
        //if(Yii::$app->session["user"]){
        //    return json_encode(["fail", "not login"]);
        //}

        //is get
        if (!Yii::$app->request->isGet) {
            return json_encode(["fail", "method error"]);
        }

        //user auth
        //if(Yii::$app->session["user"]["auth"] != "admin"){
        //    return json_encode(["fail", "auth error"]);
        //}

        $gets      = Yii::$app->request->get();
        $andWhere  = [];
        $likeEmail = $likePhone = $likeName = $likeNickname = $likeAddress = $likeRemarks = [];
        $offset    = $limit = null;
        $orderBy   = null;

        //where like
        if (array_key_exists("searchName", $gets)) {
            $likeEmail    = ["like", "email", $gets["searchName"]];
            $likePhone    = ["like", "phone", $gets["searchName"]];
            $likeName     = ["like", "name", $gets["searchName"]];
            $likeNickname = ["like", "nickname", $gets["searchName"]];
            $likeAddress  = ["like", "address", $gets["searchName"]];
            $likeRemarks  = ["like", "remarks", $gets["searchName"]];
        }

        //where ==
        array_key_exists("id", $gets) ? $andWhere["Id"] = $gets["id"] : false ;
        array_key_exists("sex", $gets) ? $andWhere["sex"] = $gets["sex"] : false;
        array_key_exists("auth", $gets) ? $andWhere["auth"] = $gets["auth"] : false;
        array_key_exists("status", $gets) ? $andWhere["status"] = $gets["status"] : false;

        //limit
        array_key_exists("offset", $gets) ? $offset = $gets["offset"] : false;
        array_key_exists("limit", $gets) ? $limit = $gets["limit"] : false;

        //orderBy
        if (array_key_exists("orderBy", $gets)) {
            if ($gets["orderBy"] == "createTimeASC") {
                $orderBy = "create_time ASC";
            }
            elseif ($gets["orderBy"] == "createTimeDESC") {
                $orderBy = "create_time DESC";
            }
            elseif ($gets["orderBy"] == "lastTimeASC") {
                $orderBy = "last_time ASC";
            }
            elseif ($gets["orderBy"] == "lastTimeDESC") {
                $orderBy = "last_time DESC";
            }
        }

        $result = User::find()
            ->orFilterWhere($likeEmail)
            ->orFilterWhere($likePhone)
            ->orFilterWhere($likeName)
            ->orFilterWhere($likeNickname)
            ->orFilterWhere($likeAddress)
            ->orFilterWhere($likeRemarks)
            ->andFilterWhere($andWhere)
            ->orderBy($orderBy)
            ->offset($offset)
            ->limit($limit)
            ->asArray()->all();
        return json_encode(["success", $result]);
    }

    //Create user
    function actionCreateUser()
    {
        return json_encode(["success"]);
    }

    //Update user
    function actionUpdateUser()
    {
        return json_encode(["success"]);
    }

    //Del user
    function actionDelUser()
    {
        return json_encode(["success"]);
    }
}
