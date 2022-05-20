<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $id
 * @property string $title_en
 * @property string $title_uz
 * @property string $description_en
 * @property string $description_uz
 * @property int $price
 * @property string $mentor
 * @property string $poster_img
 * @property string $videolink
 * @property int $category_id
 * @property int|null $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Ccategory $category
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_'.Yii::$app->language, 'description_'.Yii::$app->language, 'price', 'mentor', 'poster_img', 'videolink', 'category_id', 'created_at', 'updated_at'], 'required'],
            [['description_'.Yii::$app->language,], 'string'],
            [['price', 'category_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title_'.Yii::$app->language, 'mentor', 'poster_img', 'videolink'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ccategory::class, 'targetAttribute' => ['category_id' => 'id']],
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
            'description_en' => Yii::t('app', 'Description En'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'price' => Yii::t('app', 'Price'),
            'mentor' => Yii::t('app', 'Mentor'),
            'poster_img' => Yii::t('app', 'Poster Img'),
            'videolink' => Yii::t('app', 'Videolink'),
            'category_id' => Yii::t('app', 'Category ID'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Ccategory::class, ['id' => 'category_id']);
    }
}
