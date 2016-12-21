<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $nickname
 * @property string $email
 * @property string $homeadd
 * @property string $gender
 * @property string $cpnum
 * @property string $comment
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'nickname', 'email', 'homeadd', 'gender', 'cpnum', 'comment'], 'required'],
            [['firstname', 'lastname', 'email', 'homeadd', 'cpnum', 'comment'], 'string', 'max' => 25],
            [['nickname', 'gender'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'homeadd' => 'Homeadd',
            'gender' => 'Gender',
            'cpnum' => 'Cpnum',
            'comment' => 'Comment',
        ];
    }
}
