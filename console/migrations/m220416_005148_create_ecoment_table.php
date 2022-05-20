<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ecoment}}`.
 */
class m220416_005148_create_ecoment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ecoment}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'event_id'=> $this->integer(),
            'content' => $this->text(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
        $this->addForeignKey('fk-event-coment-user', 'ecoment', 'user_id', 'user','id','CASCADE', 'CASCADE');
        $this->addForeignKey('fk-coment-event', 'ecoment', 'event_id', 'events', 'id', 'CASCADE' ,'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-event-coment-user', 'ecoment');
        $this->dropForeignKey('fk-coment-event', 'ecoment');
        $this->dropTable('{{%ecoment}}');
    }
}
