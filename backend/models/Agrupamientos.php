<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "agrupamientos".
 *
 * @property integer $id
 * @property string $agrupamiento
 * @property string $departamento
 * @property string $materia
 * @property string $docente
 * @property string $curso
 * @property string $nivel
 * @property string $secreto
 * @property integer $idDocente
 */
class Agrupamientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agrupamientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agrupamiento', 'idDocente'], 'required'],
            [['idDocente'], 'integer'],
            [['agrupamiento', 'materia'], 'string', 'max' => 50],
            [['departamento'], 'string', 'max' => 30],
            [['docente', 'nivel'], 'string', 'max' => 6],
            [['curso', 'secreto'], 'string', 'max' => 1],
            [['agrupamiento'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'agrupamiento' => 'Agrupamiento',
            'departamento' => 'Departamento',
            'materia' => 'Materia',
            'docente' => 'Docente',
            'curso' => 'Curso',
            'nivel' => 'Nivel',
            'secreto' => 'Secreto',
            'idDocente' => 'Profesor',
        ];
    }

    /**
    * @return \yii\db\ActiveRelation
    */
    public function getProfesor() {
        return $this->hasOne(Profesores::className(), ['id' => 'idDocente']);
    }

    public function getProfesorUsuario() {
        return $this->profesor->username;
    }

    public function getAlumnado(){
        return $this->hasMany(Alumnado::className(), ['codigo' => 'codigo'])->viaTable('matricula', ['codigo' => 'codigo']);
    }
}
