<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "grupos".
 *
 * @property integer $id
 * @property string $cod_grupo
 * @property string $tut1_grupo
 * @property string $niv_grupo
 * @property string $cur_grupo
 */
class Grupos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cod_grupo'], 'string', 'max' => 8],
            [['tut1_grupo', 'niv_grupo'], 'string', 'max' => 6],
            [['cur_grupo'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cod_grupo' => 'Grupo',
            'tut1_grupo' => 'Tut1 Grupo',
            'niv_grupo' => 'Niv Grupo',
            'cur_grupo' => 'Cur Grupo',
        ];
    }
}
