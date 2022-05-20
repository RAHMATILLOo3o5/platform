<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;
/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string|null $title_en
 * @property string|null $title_uz
 * @property string|null $content_en
 * @property string|null $content_uz
 * @property string|null $icon
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }
    public function behaviors()
    {
        return [
            [
                'class'=>TimestampBehavior::class,
            ]
            ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_en', 'content_uz'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title_en', 'title_uz', 'icon'], 'string', 'max' => 255],
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
            'content_en' => Yii::t('app', 'Content En'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'icon' => Yii::t('app', 'Icon'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function getShortText()
    {
        return StringHelper::truncateWords($this->content_en, 5);
    }
}
