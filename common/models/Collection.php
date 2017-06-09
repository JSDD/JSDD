<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jsdd_collection".
 *
 * @property string $Id
 * @property string $article-id
 * @property string $user-id
 * @property string $create-time
 */
class Collection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jsdd_collection';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article-id', 'user-id'], 'integer'],
            [['create-time'], 'safe'],
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
            'create-time' => 'Create Time',
        ];
    }
}
