<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jsdd_like".
 *
 * @property string $Id
 * @property string $article-id
 * @property string $comment-id
 * @property string $user-group
 * @property integer $count
 */
class Like extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jsdd_like';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article-id', 'comment-id', 'count'], 'integer'],
            [['user-group'], 'string', 'max' => 255],
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
            'comment-id' => 'Comment ID',
            'user-group' => 'User Group',
            'count' => 'Count',
        ];
    }
}
