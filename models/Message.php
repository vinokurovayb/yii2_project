<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string $text
 * @property string $name
 * @property string $email
 * @property int $views
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'name'], 'required'],
            [['text'], 'string'],
            [['views'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'name' => 'Name',
            'email' => 'Email',
            'views' => 'Views',
        ];
    }
}
