<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jsdd_images".
 *
 * @property string $Id
 * @property string $name
 * @property string $url
 * @property string $upload-time
 * @property string $size
 * @property string $statu
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jsdd_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['upload-time'], 'safe'],
            [['statu'], 'integer'],
            [['name', 'url', 'size'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'upload-time' => 'Upload Time',
            'size' => 'Size',
            'statu' => 'Statu',
        ];
    }
}
