<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%events}}`.
 */
class m220325_130928_create_events_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%events}}', [
            'id' => $this->primaryKey(),
            'title_en' => $this->string(500),
            'title_uz' => $this->string(500),
            'content_en' => $this->text(),
            'content_uz' => $this->text(),
            'img' => $this->string(300),
            'location' => $this->string(200),
            'date'=>$this->string(200),
            'internal'=>$this->string(200),
            'caty_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%events}}');
    }
}
