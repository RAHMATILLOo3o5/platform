<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%workers}}`.
 */
class m220405_092925_create_workers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%workers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'login' => $this->string(255)->notNull(),
            'password' => $this->string(255)->notNull(),
            'status'=> $this->boolean()->defaultValue(false),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%workers}}');
    }
}
