<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Agrupamientos;

/**
 * AgrupamientosSearch represents the model behind the search form about `app\models\Agrupamientos`.
 */
class AgrupamientosSearch extends Agrupamientos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idDocente'], 'integer'],
            [['agrupamiento', 'departamento', 'materia', 'docente', 'curso', 'nivel', 'secreto'], 'safe'],
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
        $query = Agrupamientos::find();

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
            'id' => $this->id,
            'idDocente' => $this->idDocente,
        ]);

        $query->andFilterWhere(['like', 'agrupamiento', $this->agrupamiento])
            ->andFilterWhere(['like', 'departamento', $this->departamento])
            ->andFilterWhere(['like', 'materia', $this->materia])
            ->andFilterWhere(['like', 'docente', $this->docente])
            ->andFilterWhere(['like', 'curso', $this->curso])
            ->andFilterWhere(['like', 'nivel', $this->nivel])
            ->andFilterWhere(['like', 'secreto', $this->secreto]);

        return $dataProvider;
    }
}
