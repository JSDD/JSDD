<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jsdd_comment".
 *
 * @property string $Id
 * @property string $article-id
 * @property string $user-id
 * @property string $content
 * @property string $create-time
 * @property string $update-time
 * @property string $statu
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jsdd_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article-id', 'user-id', 'statu'], 'integer'],
            [['create-time', 'update-time'], 'safe'],
            [['content'], 'string', 'max' => 1255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'article-id' => 'Article ID',
            'user-id' => 'User ID',
            'content' => 'Content',
            'create-time' => 'Create Time',
            'update-time' => 'Update Time',
            'statu' => 'Statu',
        ];
    }
}
