<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "user_type".
 *
 * @property integer $id
 * @property string $name
 * @property integer $value
 */
class UserType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_type';
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
            'name' => 'User Type Name',
            'value' => 'User Type Value',
        ];
    }
	
	public function getUsers()
	{
		return $this->hasMany(User::className(), ['user_type_id' => 'id']);
	}
}
