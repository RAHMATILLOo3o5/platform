<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m220408_153159_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'title_en'=>$this->string(255),
            'title_uz'=>$this->string(255),
            'content_en'=>$this->text(),
            'content_uz'=>$this->text(),
            'icon'=>$this->string(),
            'status'=>$this->boolean()->defaultValue(false),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about}}');
    }
}
