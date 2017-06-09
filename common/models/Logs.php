<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jsdd_logs".
 *
 * @property integer $Id
 * @property string $user-id
 * @property string $articel-id
 * @property string $comment-id
 * @property string $reply-id
 * @property string $collection-id
 * @property string $create-time
 * @property string $type
 */
class Logs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jsdd_logs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user-id', 'articel-id', 'comment-id', 'reply-id', 'collection-id'], 'integer'],
            [['create-time'], 'safe'],
            [['type'], 'string', 'max' => 255],
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
            'articel-id' => 'Articel ID',
            'comment-id' => 'Comment ID',
            'reply-id' => 'Reply ID',
            'collection-id' => 'Collection ID',
            'create-time' => 'Create Time',
            'type' => 'Type',
        ];
    }
}
