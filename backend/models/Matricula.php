<?php

namespace backend\models;

use backend\models\Agrupamientos;

use Yii;

/**
 * This is the model class for table "matricula".
 *
 * @property string $codigo
 * @property integer $idAgrupamiento
 * @property string $agrupamiento
 */
class Matricula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'matricula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'idAgrupamiento'], 'required'],
            [['idAgrupamiento'], 'integer'],
            [['codigo'], 'string', 'max' => 8],
            [['agrupamiento'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'idAgrupamiento' => 'Id Agrupamiento',
            'agrupamiento' => 'Agrupamiento',

        ];
    }


    public function getAgrupamiento()
    {
        return $this->hasOne(Agrupamientos::className(), ['id' => 'idAgrupamiento']);
    }

    public function getAlumno()
    {
        return $this->hasOne(Alumnado::className(), ['codigo' => 'codigo']);
    }


}
