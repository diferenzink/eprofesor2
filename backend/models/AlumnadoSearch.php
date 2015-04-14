<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Alumnado;

/**
 * AlumnadoSearch represents the model behind the search form about `backend\models\Alumnado`.
 */
class AlumnadoSearch extends Alumnado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'dni', 'nombre', 'apellido1', 'apellido2', 'apellidos', 'f_nac', 'grupo', 'modalidad', 'repite', 'dniTutor1', 'tutor1', 'dniTutor2', 'tutor2', 'direccion1', 'CP', 'localidad', 'provincia', 'telef1', 'telef2', 'nacionalidad', 'mail', 'clave'], 'safe'],
            [['idGrupo'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Alumnado::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'f_nac' => $this->f_nac,
            'idGrupo' => $this->idGrupo,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'dni', $this->dni])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido1', $this->apellido1])
            ->andFilterWhere(['like', 'apellido2', $this->apellido2])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'grupo', $this->grupo])
            ->andFilterWhere(['like', 'modalidad', $this->modalidad])
            ->andFilterWhere(['like', 'repite', $this->repite])
            ->andFilterWhere(['like', 'dniTutor1', $this->dniTutor1])
            ->andFilterWhere(['like', 'tutor1', $this->tutor1])
            ->andFilterWhere(['like', 'dniTutor2', $this->dniTutor2])
            ->andFilterWhere(['like', 'tutor2', $this->tutor2])
            ->andFilterWhere(['like', 'direccion1', $this->direccion1])
            ->andFilterWhere(['like', 'CP', $this->CP])
            ->andFilterWhere(['like', 'localidad', $this->localidad])
            ->andFilterWhere(['like', 'provincia', $this->provincia])
            ->andFilterWhere(['like', 'telef1', $this->telef1])
            ->andFilterWhere(['like', 'telef2', $this->telef2])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'clave', $this->clave]);

        return $dataProvider;
    }
}
