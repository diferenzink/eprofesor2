<?php

namespace backend\models;

use Yii;


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
            'username' => 'Usuario',
            'password' => 'Contraseña',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Pista Restablecer Contraseña',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'email' => 'Email',
            'web' => 'Web',
            'especialidad' => 'Especialidad',
            'telef1' => 'Teléfono 1',
            'telef2' => 'Teléfono 2',
            'rol' => 'Rol',
            'activo' => 'Activo',
            'acceso' => 'Acceso',
        ];
    }

    public function getNombreCompleto()
    {
        return $this->apellidos .', '.$this->nombre;
    }
}
