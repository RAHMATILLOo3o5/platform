<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%like}}`.
 */
class m220410_050014_create_like_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%like}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'course_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_like_user', '{{%like}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_like_course', '{{%like}}', 'course_id', '{{%courses}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_like_user', '{{%like}}');
        $this->dropForeignKey('fk_like_course', '{{%like}}');
        $this->dropTable('{{%like}}');
    }
}
