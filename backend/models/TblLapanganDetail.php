<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_lapangan_detail".
 *
 * @property int $id_detail
 * @property int $nama_detail
 * @property string $status
 */
class TblLapanganDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_lapangan_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lapangan', 'nama_detail', 'status'], 'required'],
            [['id_lapangan'], 'integer'],
            [['status', 'nama_detail'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id Detail',
            'nama_detail' => 'Nama Detail',
            'status' => 'Status',
        ];
    }
}
