<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datos".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property string $telefono
 *
 * @property Tareas[] $tareas
 */
class Datos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'correo', 'telefono'], 'required'],
            [['nombre', 'apellido', 'correo'], 'string', 'max' => 50],
            [['telefono'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'correo' => 'Correo',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * Gets query for [[Tareas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTareas()
    {
        return $this->hasMany(Tareas::className(), ['id_user' => 'id']);
    }
}
