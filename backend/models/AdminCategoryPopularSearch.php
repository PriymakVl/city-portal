<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CategoryPopularModel;

/**
 * AdminCategoryPopularSearch represents the model behind the search form about `common\models\CategoryPopularModel`.
 */
class AdminCategoryPopularSearch extends CategoryPopularModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'user_id', 'status'], 'integer'],
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
        $query = CategoryPopularModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cat_id' => $this->cat_id,
            'user_id' => $this->user_id,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
