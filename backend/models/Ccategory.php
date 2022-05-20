<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ccategory".
 *
 * @property int $id
 * @property string $title_en
 * @property string $title_uz
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Courses[] $courses
 */
class Ccategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ccategory';
    }
    public function behaviors()
    {
        return [
            ['class' => 'yii\behaviors\TimestampBehavior',]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_en', 'title_uz'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title_en', 'title_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public function getStatusLabel()
    {
        if ($this->status == 1) {
            return "<span class='badge badge-success'> active </span>";
        }
        return "<span class='badge badge-danger'> Disabled </span>";
    }
    /**
     * Gets query for [[Courses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Courses::class, ['category_id' => 'id']);
    }
}
