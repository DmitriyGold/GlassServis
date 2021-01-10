<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%main}}`.
 */
class m210110_124133_create_main_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%main}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255), // заголовок вставки
            'text' => $this->string(255), // текстовая вставка
            'nomer' => $this->integer(), // цифровая вставка
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет   
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%main}}');
    }

}
