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
 * @property string $nikname
 * @property string $headimg
 * @property string $address
 * @property string $birthday
 * @property string $sex
 * @property string $creat_time
 * @property string $last_time
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
            [['phone', 'sex', 'auth', 'status'], 'integer'],
            [['birthday', 'creat_time', 'last_time'], 'safe'],
            [['email', 'password', 'name', 'nikname', 'headimg', 'address', 'remarks'], 'string', 'max' => 255],
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
            'nikname' => 'Nikname',
            'headimg' => 'Headimg',
            'address' => 'Address',
            'birthday' => 'Birthday',
            'sex' => 'Sex',
            'creat_time' => 'Creat Time',
            'last_time' => 'Last Time',
            'remarks' => 'Remarks',
            'auth' => 'Auth',
            'status' => 'Status',
        ];
    }
}
