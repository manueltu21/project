<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datos */

$this->title = 'Crear nuevos Datos';
$this->params['breadcrumbs'][] = ['label' => 'Datos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
