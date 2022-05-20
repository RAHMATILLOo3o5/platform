<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%coursecoment}}`.
 */
class m220412_172228_create_coursecoment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%coursecoment}}', [
            'id' => $this->primaryKey(),
            'content' => $this->text(),
            'user_id' => $this->integer(),
            'course_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
        $this->addForeignKey('fk-coment-course-user', '{{%coursecoment}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-coment-course', '{{%coursecoment}}', 'course_id', 'courses', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-coment-course-user', '{{%coursecoment}}');
        $this->dropForeignKey('fk-coment-course', '{{%coursecoment}}');
        $this->dropTable('{{%coursecoment}}');
    }
}
