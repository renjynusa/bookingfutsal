<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_pelanggan".
 *
 * @property int $id
 * @property string $nama
 * @property string $no_hp
 * @property string $alamat
 * @property string $email
 * @property string $status
 */
class TblPelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'no_hp', 'alamat', 'email', 'status'], 'required'],
            [['alamat', 'status'], 'string'],
            [['nama', 'no_hp', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'no_hp' => 'No Hp',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'status' => 'Status',
        ];
    }
}
