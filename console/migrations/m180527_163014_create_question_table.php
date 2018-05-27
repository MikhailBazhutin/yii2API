<?php

use yii\db\Migration;

/**
 * Handles the creation of table `question`.
 */
class m180527_163014_create_question_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('question', [
            'id' => $this->primaryKey(),
            'text' => $this->string()->notNull(),
            'complexity' => $this->smallInteger()->notNull()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('question');
    }
}
