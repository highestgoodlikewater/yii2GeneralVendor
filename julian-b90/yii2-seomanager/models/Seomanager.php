<?php

namespace julianb90\seomanager\models;

use Yii;

/**
 * This is the model class for table "seomanager".
 *
 * @property integer $id
 * @property string $route
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $canonical
 * @property string $data
 * @property integer $updated
 * @property integer $created
 */
class Seomanager extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seomanager';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['updated', 'created'], 'integer'],
            [['created'], 'required'],
            [['route', 'title', 'keywords', 'description', 'canonical', 'data'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'route' => 'Route/Url',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'canonical' => 'Canonical',
            'data' => 'Data',
            'updated' => 'Updated',
            'created' => 'Created',
        ];
    }
}
