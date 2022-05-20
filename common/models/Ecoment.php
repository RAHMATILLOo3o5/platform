<?php

namespace common\models;

use Yii;
use frontend\models\Events;
use common\models\User;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ecoment".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $event_id
 * @property string|null $content
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Events $event
 * @property User $user
 */
class Ecoment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ecoment';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'event_id', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Events::class, 'targetAttribute' => ['event_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'event_id' => 'Event ID',
            'content' => 'Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Event]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Events::class, ['id' => 'event_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
