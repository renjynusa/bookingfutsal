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
            [['foto'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
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

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            if ($this->foto) {
                if (!empty($this->foto->baseName)) {
                    $filename = time() . "_" . str_replace(" ", "_", $this->foto->baseName) . '.' . $this->foto->extension;
                    $this->foto->saveAs('upload/' . $filename);
                    $this->foto = $filename;
                }
            } else {
                if (Yii::$app->request->get('id')) {
                    $foto = TblLapangan::findOne(Yii::$app->request->get('id'));
                    $this->foto = $foto->foto ?? "empty.jpg";
                } else {
                    $this->foto = "empty.jpg";
                }
            }
            return true;
        }
    }
}
