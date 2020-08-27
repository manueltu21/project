<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tareas".
 *
 * @property int $id_tarea
 * @property string $nombre
 * @property string $prioridad
 * @property int $id_user
 *
 * @property Datos $user
 */
class Tareas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tareas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'prioridad', 'id_user'], 'required'],
            [['id_user'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['prioridad'], 'string', 'max' => 20],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => Datos::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tarea' => 'Id Tarea',
            'nombre' => 'Nombre',
            'prioridad' => 'Prioridad',
            'id_user' => 'Id User',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Datos::className(), ['id' => 'id_user']);
    }
}
