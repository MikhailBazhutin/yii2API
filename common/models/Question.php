<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property string $text
 * @property int $complexity
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName(): string
    {
        return 'question';
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            [['text'], 'required'],
            [['complexity'], 'integer'],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'complexity' => 'Complexity',
        ];
    }
}
