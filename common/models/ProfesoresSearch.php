<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profesores;

/**
 * ProfesoresSearch represents the model behind the search form about `app\models\Profesores`.
 */
class ProfesoresSearch extends Profesores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['username', 'password', 'auth_key', 'password_reset_token', 'nombre', 'apellidos', 'email', 'web', 'especialidad', 'telef1', 'telef2', 'rol', 'acceso'], 'safe'],
            [['activo'], 'boolean'],
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
        $query = Profesores::find();

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
            'activo' => $this->activo,
            'acceso' => $this->acceso,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'web', $this->web])
            ->andFilterWhere(['like', 'especialidad', $this->especialidad])
            ->andFilterWhere(['like', 'telef1', $this->telef1])
            ->andFilterWhere(['like', 'telef2', $this->telef2])
            ->andFilterWhere(['like', 'rol', $this->rol]);

        return $dataProvider;
    }
}
