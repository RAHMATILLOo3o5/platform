<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%enroll}}`.
 */
class m220410_043951_create_enroll_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%enroll}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'course_id' => $this->integer()->notNull(),
            'status' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_enroll_user', '{{%enroll}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_enroll_course', '{{%enroll}}', 'course_id', '{{%courses}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_enroll_user', '{{%enroll}}');
        $this->dropForeignKey('fk_enroll_course', '{{%enroll}}');
        $this->dropTable('{{%enroll}}');
    }
}
