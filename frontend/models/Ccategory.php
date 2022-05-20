<?php

namespace frontend\models;

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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_'.Yii::$app->language, 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title_'.Yii::$app->language], 'string', 'max' => 255],
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
