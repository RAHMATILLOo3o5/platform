<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "mentor".
 *
 * @property int $id
 * @property string $name
 * @property string $job
 * @property string $img
 * @property string $description
 * @property int|null $status
 * @property string $facebook
 * @property string|null $twitter
 * @property string|null $linkedin
 * @property string|null $pinterest
 * @property string|null $telegram
 * @property string|null $instagram
 * @property string|null $youtube
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Mentor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mentor';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'job',  'description',], 'required'],
            [['description'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['job', 'facebook', 'twitter', 'linkedin', 'pinterest', 'telegram', 'instagram', 'youtube'], 'string', 'max' => 255],
            ['img', 'file', 'extensions' => 'jpg, gif, png'],
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
            'job' => Yii::t('app', 'Job'),
            'img' => Yii::t('app', 'Img'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'facebook' => Yii::t('app', 'Facebook'),
            'twitter' => Yii::t('app', 'Twitter'),
            'linkedin' => Yii::t('app', 'Linkedin'),
            'pinterest' => Yii::t('app', 'Pinterest'),
            'telegram' => Yii::t('app', 'Telegram'),
            'instagram' => Yii::t('app', 'Instagram'),
            'youtube' => Yii::t('app', 'Youtube'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
