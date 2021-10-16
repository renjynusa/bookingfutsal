<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_order".
 *
 * @property int $id
 * @property string $kode
 * @property string $tgl_order
 * @property string $time_start
 * @property string $time_end
 * @property int $total_bayar
 * @property string $status
 */
class TblOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'id_detail_lapangan','tgl_booking','jumlah_jam', 'time_start', 'time_end'], 'required'],
            [['tgl_order','tgl_booking', 'time_start', 'time_end'], 'safe'],
            [['total_bayar', 'jumlah_jam'], 'integer'],
            [['status'], 'string'],
            [['kode'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'tgl_order' => 'Tgl Order',
            'time_start' => 'Time Start',
            'time_end' => 'Time End',
            'total_bayar' => 'Total Bayar',
            'status' => 'Status',
        ];
    }
}
