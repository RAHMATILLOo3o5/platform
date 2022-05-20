<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mentor}}`.
 */
class m220410_005007_create_mentor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mentor}}', [
            'id' => $this->primaryKey(),
            'name'=> $this->string(60)->notNull(),
            'job'=> $this->string(255)->notNull(),
            'img'=>$this->string(255)->notNull(),
            'description'=>$this->text()->notNull(),
            'status'=>$this->boolean()->defaultValue(false),
            'facebook'=>$this->string(255)->notNull(),
            'twitter'=>$this->string(255),
            'linkedin'=>$this->string(255),
            'pinterest'=>$this->string(255),
            'telegram'=>$this->string(255),
            'instagram'=>$this->string(255),
            'youtube'=>$this->string(255),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mentor}}');
    }
}
