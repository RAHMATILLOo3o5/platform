<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%courses}}`.
 */
class m220408_175515_create_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%courses}}', [
            'id' => $this->primaryKey(),
            'title_en' => $this->string(255)->notNull(),
            'title_uz' => $this->string(255)->notNull(),
            'description_en' => $this->text()->notNull(),
            'description_uz' => $this->text()->notNull(),
            'price' => $this->integer()->notNull(),
            'mentor' => $this->string(255)->notNull(),
            'poster_img' => $this->string(255)->notNull(),
            'videolink' => $this->string(255)->notNull(),
            'category_id' => $this->integer()->notNull(),    
            'status' => $this->boolean()->defaultValue(false),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk-courses-category_id', 'courses', 'category_id', 'ccategory', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-courses-category_id', 'courses');
        $this->dropTable('{{%courses}}');
    }
}
