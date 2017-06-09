<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jsdd_article".
 *
 * @property integer $Id
 * @property string $title
 * @property string $content
 * @property string $user-id
 * @property string $create-time
 * @property string $update-time
 * @property string $statu
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jsdd_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['user-id', 'statu'], 'integer'],
            [['create-time', 'update-time'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'user-id' => 'User ID',
            'create-time' => 'Create Time',
            'update-time' => 'Update Time',
            'statu' => 'Statu',
        ];
    }
}
