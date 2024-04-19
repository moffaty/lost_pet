<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int $role_id
 *
 * @property PetRequests[] $petRequests
 * @property Role $role
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    public function __toString() {
        return $this->name;
    }
    public $rePassword;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'role_id', 'rePassword'], 'required'],
            [['role_id'], 'integer'],
            [['name'], 'string', 'max' => 511],
            [['password'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['email'], 'email'],
            ['rePassword', 'compare', 'compareAttribute' => 'password'],
            ['password', 'match', 'pattern' => '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!?\-\/_\\#@]{8,}$/'],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::class, 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'name' => 'Имя',
            'email' => 'Почта',
            'password' => 'Пароль',
            'role_id' => 'Роль',
            'rePassword' => 'Подтверждение пароля',
        ];
    }

    /**
     * Gets query for [[PetRequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPetRequests()
    {
        return $this->hasMany(PetRequests::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::class, ['id' => 'role_id']);
    }

        /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne(['id'=> $id]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($email)
    {
        return self::findOne(['email'=> $email]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return null;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
