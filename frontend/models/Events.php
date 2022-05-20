<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;
/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $img
 * @property string|null $location
 * @property string|null $date
 * @property string|null $internal
 * @property int|null $caty_id
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Eventcaty $caty
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
        return [
            TimestampBehavior::class            
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content_'.Yii::$app->language, 'title_'.Yii::$app->language, 'img', 'location'], 'required'],
            [['content_'.Yii::$app->language,], 'string'],
            [['caty_id', 'created_at', 'updated_at'], 'integer'],
            [['title_'.Yii::$app->language,], 'string', 'max' => 500],
            [['img'], 'file', 'extensions'=>['png', 'jpg', 'jpeg']],
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
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
            'img' => Yii::t('app', 'Img'),
            'location' => Yii::t('app', 'Location'),
            'date' => Yii::t('app', 'Date'),
            'internal' => Yii::t('app', 'Internal'),
            'caty_id' => Yii::t('app', 'Caty ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[Caty]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getCaty()
    {
        return $this->hasOne(Eventcaty::class, ['id' => 'caty_id']);
    }

    public function getShortText()
    {
        return StringHelper::truncateWords($this->content, 4);
    }
    public function getEventImg()
    {
        return "<img src='".Yii::getAlias('@imgevent').'/'.$this->img."' class='img-fluid' width='100'>";
    }
 
}
