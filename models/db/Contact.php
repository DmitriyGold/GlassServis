<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $detailed_text
 * @property int|null $sort
 * @property int|null $hide
 */
class Contact extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['detailed_text'], 'string'],
            [['sort', 'hide'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'наименование',
            'detailed_text' => 'текст',
            'sort' => 'сортировка',
            'hide' => 'скрыть',
        ];
    }

    public function getHide() {
        return ($this->hide) ? 'да' : '';
    }

}
