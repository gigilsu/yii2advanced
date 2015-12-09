<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $name
 * @property integer $value
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'value'], 'required'],
            [['value'], 'integer'],
            [['name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'value' => 'Value',
        ];
    }
	
	public function getUsers()
	{
		return $this->hasMany(User::className(), ['status_id' => 'id']);
	}
}
