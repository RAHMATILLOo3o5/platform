<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $subject
 * @property string|null $body
 * @property int|null $status
 * @property int|null $created_at
 */
class Contact extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'updatedAtAttribute' => false
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['status', 'created_at'], 'integer'],
            [['name', 'email'], 'string', 'max' => 150],
            [['subject'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'subject' => Yii::t('app', 'Subject'),
            'body' => Yii::t('app', 'Body'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    public function getStatusLabel()
    {
        if ($this->status == 1) {
            return "<span class='badge badge-success'> O'qilgan </span>";
        }
        return "<span class='badge badge-primary'> O'qilmagan </span>";
    }
    public function getShortText()
    {
        return StringHelper::truncate($this->body, 10);
    }
    /**
     * {@inheritdoc}
     * @return ContactQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new ContactQuery(get_called_class());
    // }
}
