<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Events;

/**
 * EventsQuery represents the model behind the search form of `common\models\Events`.
 */
class EventsQuery extends Events
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caty_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'content', 'location', 'date', 'internal'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Events::find();

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
            'caty_id' => $this->caty_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'internal', $this->internal]);

        return $dataProvider;
    }
}
