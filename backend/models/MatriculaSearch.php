<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Matricula;

/**
 * MatriculaSearch represents the model behind the search form about `app\models\Matricula`.
 */
class MatriculaSearch extends Matricula
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'agrupamiento'], 'safe'],
            [['idAgrupamiento'], 'integer'],
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
        $query = Matricula::find();

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
            'idAgrupamiento' => $this->idAgrupamiento,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo]);

        return $dataProvider;
    }
}
