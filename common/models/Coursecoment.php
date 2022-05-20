<?php

namespace common\models;

use Yii;
use backend\models\Courses;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\behaviors\BlameableBehavior;
/**
 * This is the model class for table "coursecoment".
 *
 * @property int $id
 * @property string|null $content
 * @property int|null $user_id
 * @property int|null $course_id
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Courses $course
 * @property User $user
 */
class Coursecoment extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coursecoment';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class
            ],
            [
                'class'=> BlameableBehavior::class,
                'attributes'=>[
                    ActiveRecord::EVENT_BEFORE_INSERT=>['user_id'],
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['user_id', 'course_id', 'created_at', 'updated_at'], 'integer'],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::class, 'targetAttribute' => ['course_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'content' => Yii::t('app', 'Content'),
            'user_id' => Yii::t('app', 'User'),
            'course_id' => Yii::t('app', 'Course'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[Course]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Courses::class, ['id' => 'course_id']);
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
