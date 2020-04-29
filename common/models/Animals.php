<?php

namespace common\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%animals_animals}}".
 *
 * @property int $id
 * @property string $class
 * @property string $name
 * @property string|null $discription
 * @property int $status
 * @property string $picture_path
 * @property string $picture_base_url
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Animals extends \yii\db\ActiveRecord
{
    const STATUS_NOT_ACTIVE = 0;
    const STATUS_ACTIVE = 1;

    /**
     * @var
     */
    public $picture;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%animals_animals}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            'picture' => [
                'class' => UploadBehavior::class,
                'attribute' => 'picture',
                'pathAttribute' => 'picture_path',
                'baseUrlAttribute' => 'picture_base_url',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['class', 'name'], 'required'],
            [['discription'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['class', 'name', 'picture_path', 'picture_base_url'], 'string', 'max' => 512],
            ['picture', 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('animals', 'ID'),
            'class' => Yii::t('animals', 'Class'),
            'name' => Yii::t('animals', 'Name'),
            'discription' => Yii::t('animals', 'Discription'),
            'status' => Yii::t('animals', 'Status'),
            'created_at' => Yii::t('animals', 'Created At'),
            'updated_at' => Yii::t('animals', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return AnimalsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AnimalsQuery(get_called_class());
    }

    /**
     * Returns user statuses list
     * @return array|mixed
     */
    public static function statuses()
    {
        return [
            self::STATUS_NOT_ACTIVE => Yii::t('common', 'Not Active'),
            self::STATUS_ACTIVE => Yii::t('common', 'Active'),

        ];
    }

    public function getNameClass()
    {
        return $this->class::NAME_ANIMALS;
    }

    /**
     * @param null $default
     * @return bool|null|string
     */
    public function getPicture($default = null)
    {
        return $this->picture_path
            ? Yii::getAlias($this->picture_base_url.'/'.$this->picture_path)
            : $default;
    }


    public function getShowBtn($type)
    {
        $tmp = new $this->class;
        return in_array($type,$tmp->getButtons());
    }

}
