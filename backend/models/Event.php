<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $nama
 * @property string $keterangan
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property int $biaya_pendaftaran
 * @property string $hadiah
 * @property string $status
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'keterangan', 'tanggal_mulai', 'tanggal_selesai', 'biaya_pendaftaran', 'hadiah', 'status'], 'required'],
            [['keterangan', 'hadiah', 'status'], 'string'],
            [['tanggal_mulai', 'tanggal_selesai'], 'safe'],
            [['biaya_pendaftaran'], 'integer'],
            [['nama'], 'string', 'max' => 255],
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
            'nama' => 'Nama',
            'keterangan' => 'Keterangan',
            'tanggal_mulai' => 'Tanggal Mulai Pendaftaran',
            'tanggal_selesai' => 'Tanggal Selesai Pendaftaran',
            'biaya_pendaftaran' => 'Biaya Pendaftaran',
            'hadiah' => 'Hadiah',
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
                    $foto = Event::findOne(Yii::$app->request->get('id'));
                    $this->foto = $foto->foto ?? "empty.jpg";
                } else {
                    $this->foto = "empty.jpg";
                }
            }
            return true;
        }
    }
}
