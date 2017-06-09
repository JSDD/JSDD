<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jsdd_reply".
 *
 * @property string $Id
 * @property string $user-id
 * @property string $comment-id
 * @property string $content
 * @property string $create-time
 * @property string $update-time
 * @property string $statu
 */
class Reply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jsdd_reply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user-id', 'comment-id', 'statu'], 'integer'],
            [['create-time', 'update-time'], 'safe'],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'user-id' => 'User ID',
            'comment-id' => 'Comment ID',
            'content' => 'Content',
            'create-time' => 'Create Time',
            'update-time' => 'Update Time',
            'statu' => 'Statu',
        ];
    }
}
