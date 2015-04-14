<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Alumnado */

$this->title = 'Modificar alumno: ' . ' ' . $model->nombreCompleto;
$this->params['breadcrumbs'][] = ['label' => 'Alumnados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo, 'url' => ['view', 'id' => $model->codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alumnado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
