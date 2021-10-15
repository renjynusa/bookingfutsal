<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblLapangan;

/**
 * TblLapanganSearch represents the model behind the search form of `backend\models\TblLapangan`.
 */
class TblLapanganSearch extends TblLapangan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'harga_sewa'], 'integer'],
            [['kode_lapangan', 'nama_lapangan', 'tempat', 'status'], 'safe'],
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
        $query = TblLapangan::find();

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
            'harga_sewa' => $this->harga_sewa,
            // 'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'kode_lapangan', $this->kode_lapangan])
            ->andFilterWhere(['like', 'nama_lapangan', $this->nama_lapangan])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
