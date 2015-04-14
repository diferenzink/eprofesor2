<?php

namespace backend\models;

use Yii;
use backend\models\Grupos;

/**
 * This is the model class for table "alumnado".
 *
 * @property string $codigo
 * @property string $dni
 * @property string $nombre
 * @property string $apellido1
 * @property string $apellido2
 * @property string $apellidos
 * @property string $f_nac
 * @property string $grupo
 * @property integer $idGrupo
 * @property string $modalidad
 * @property string $repite
 * @property string $dniTutor1
 * @property string $tutor1
 * @property string $dniTutor2
 * @property string $tutor2
 * @property string $direccion1
 * @property string $CP
 * @property string $localidad
 * @property string $provincia
 * @property string $telef1
 * @property string $telef2
 * @property string $nacionalidad
 * @property string $mail
 * @property string $clave
 */
class Alumnado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumnado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'idGrupo', 'clave'], 'required'],
            [['f_nac'], 'safe'],
            [['idGrupo'], 'integer'],
            [['repite'], 'string'],
            [['codigo'], 'string', 'max' => 8],
            [['dni'], 'string', 'max' => 12],
            [['nombre', 'modalidad'], 'string', 'max' => 40],
            [['apellido1', 'apellido2', 'mail'], 'string', 'max' => 50],
            [['apellidos', 'localidad'], 'string', 'max' => 60],
            [['grupo'], 'string', 'max' => 30],
            [['dniTutor1', 'dniTutor2', 'telef1', 'telef2'], 'string', 'max' => 9],
            [['tutor1', 'tutor2'], 'string', 'max' => 100],
            [['direccion1'], 'string', 'max' => 160],
            [['CP'], 'string', 'max' => 5],
            [['provincia'], 'string', 'max' => 70],
            [['nacionalidad'], 'string', 'max' => 20],
            [['clave'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'dni' => 'DNI',
            'nombre' => 'Nombre',
            'apellido1' => 'Apellido1',
            'apellido2' => 'Apellido2',
            'apellidos' => 'Apellidos',
            'f_nac' => 'Fecha Nacimiento',
            'grupo' => 'Grupo',
            'idGrupo' => 'Grupo',
            'modalidad' => 'Modalidad',
            'repite' => 'Repite',
            'dniTutor1' => 'DNI Tutor1',
            'tutor1' => 'Tutor1',
            'dniTutor2' => 'DNI Tutor2',
            'tutor2' => 'Tutor2',
            'direccion1' => 'Dirección',
            'CP' => 'Cód. Postal',
            'localidad' => 'Localidad',
            'provincia' => 'Provincia',
            'telef1' => 'Teléfono1',
            'telef2' => 'Teléfono2',
            'nacionalidad' => 'Nacionalidad',
            'mail' => 'Email',
            'clave' => 'Contraseña',
        ];
    }

    public function getNombreCompleto() {
        if ($this->apellido2!='')
            return $this->apellido1.' '.$this->apellido2.', '.$this->nombre;
        else
            return $this->apellido1. ', '.$this->nombre;
    }

    /**
    * @return \yii\db\ActiveRelation
    */
    public function getGrupo() {
        return $this->hasOne(Grupos::className(), ['id' => 'idGrupo']);
    }

    public function getAgrupamientos(){
        return $this->hasMany(Agrupamientos::className(), ['codigo' => 'codigo'])->viaTable('matricula', ['codigo' => 'codigo']);
    }
}
