<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "main".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $text
 * @property int|null $nomer
 * @property int|null $hide
 */
class Main extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['nomer', 'hide'], 'integer'],
            [['title', 'text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Наименование вставки',
            'text' => 'текст',
            'nomer' => 'номер',
            'hide' => 'скрыть',
        ];
    }

    public function getHide() {
        return ($this->hide) ? 'да' : '';
    }

}
