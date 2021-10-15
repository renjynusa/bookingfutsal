<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_lapangan".
 *
 * @property int $id
 * @property string $kode_lapangan
 * @property string $nama_lapangan
 * @property string $tempat
 * @property int $harga_sewa
 * @property int $jumlah
 * @property string $status
 */
class TblLapangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_lapangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_lapangan', 'nama_lapangan', 'tempat', 'harga_sewa', 'status'], 'required'],
            [['tempat', 'status'], 'string'],
            [['harga_sewa'], 'integer'],
            [['kode_lapangan', 'nama_lapangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_lapangan' => 'Kode Lapangan',
            'nama_lapangan' => 'Nama Lapangan',
            'tempat' => 'Tempat',
            'harga_sewa' => 'Harga Sewa (Jam)',
            // 'jumlah' => 'Jumlah',
            'status' => 'Status',
        ];
    }
}
