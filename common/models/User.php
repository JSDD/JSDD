<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jsdd_user".
 *
 * @property string $Id
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property string $name
 * @property string $nickname
 * @property string $headimg
 * @property string $address
 * @property integer $birthday
 * @property string $sex
 * @property integer $create_time
 * @property integer $last_time
 * @property string $remarks
 * @property string $auth
 * @property string $status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jsdd_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthday', 'sex', 'create_time', 'last_time', 'auth', 'status'], 'integer'],
            [['email', 'password', 'name', 'nickname', 'headimg', 'address', 'remarks'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 32],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'email' => 'Email',
            'phone' => 'Phone',
            'password' => 'Password',
            'name' => 'Name',
            'nickname' => 'Nickname',
            'headimg' => 'Headimg',
            'address' => 'Address',
            'birthday' => 'Birthday',
            'sex' => 'Sex',
            'create_time' => 'Create Time',
            'last_time' => 'Last Time',
            'remarks' => 'Remarks',
            'auth' => 'Auth',
            'status' => 'Status',
        ];
    }
}
