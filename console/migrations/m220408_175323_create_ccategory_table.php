<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ccategory}}`.
 */
class m220408_175323_create_ccategory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ccategory}}', [
            'id' => $this->primaryKey(),
            'title_en' => $this->string(255)->notNull(),
            'title_uz' => $this->string(255)->notNull(),
            'status' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer()->notNull(),   
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ccategory}}');
    }
}
