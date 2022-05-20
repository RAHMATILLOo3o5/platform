<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;
/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property string|null $title_en
 * @property string|null $title_uz
 * @property string|null $content_en
 * @property string|null $content_uz
 * @property string|null $img
 * @property string|null $location
 * @property string|null $date
 * @property string|null $internal
 * @property int|null $caty_id
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    public function behaviors()
    {
        return[
            [
                'class'=>TimestampBehavior::class
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_en', 'content_uz', 'title_en', 'title_uz'], 'required'],
            [['content_en', 'content_uz'], 'string'],
            [['caty_id', 'created_at', 'updated_at'], 'integer'],
            [['title_en', 'title_uz'], 'string', 'max' => 500],
            [['img'], 'file', 'extensions' => ['png', 'jpg', 'jpeg']],
            [['location', 'date', 'internal'], 'string', 'max' => 200],
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
            'img' => Yii::t('app', 'Img'),
            'location' => Yii::t('app', 'Location'),
            'date' => Yii::t('app', 'Date'),
            'internal' => Yii::t('app', 'Internal'),
            'caty_id' => Yii::t('app', 'Caty ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public function getShortText()
    {
        return StringHelper::truncateWords($this->content_en, 5);
    }
    public function getEventImg()
    {
        return "<img src='" . Yii::getAlias('@imgevent') . '/' . $this->img . "' class='img-fluid' width='100'>";
    }
    /**
     * {@inheritdoc}
     * @return \backend\models\search\EventsQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new \backend\models\search\EventsQuery(get_called_class());
    // }
}
