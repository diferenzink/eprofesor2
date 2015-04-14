<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesores".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $password_reset_token
 * @property string $nombre
 * @property string $apellidos
 * @property string $email
 * @property string $web
 * @property string $especialidad
 * @property string $telef1
 * @property string $telef2
 * @property string $rol
 * @property boolean $activo
 * @property string $acceso
 */
class Profesores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'acceso'], 'required'],
            [['activo'], 'boolean'],
            [['acceso'], 'safe'],
            [['username'], 'string', 'max' => 45],
            [['password', 'especialidad'], 'string', 'max' => 30],
            [['auth_key'], 'string', 'max' => 32],
            [['password_reset_token'], 'string', 'max' => 255],
            [['nombre'], 'string', 'max' => 40],
            [['apellidos'], 'string', 'max' => 60],
            [['email', 'web'], 'string', 'max' => 50],
            [['telef1', 'telef2'], 'string', 'max' => 9],
            [['rol'], 'string', 'max' => 1],
            [['username'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'email' => 'Email',
            'web' => 'Web',
            'especialidad' => 'Especialidad',
            'telef1' => 'Telef1',
            'telef2' => 'Telef2',
            'rol' => 'Rol',
            'activo' => 'Activo',
            'acceso' => 'Acceso',
        ];
    }
}
