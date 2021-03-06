<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Agrupamientos */

$this->title = $model->agrupamiento;
?>
<div class="agrupamientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro de que desea borrar este agrupamiento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'agrupamiento',
            'departamento',
            'materia',
            //'docente',
            'curso',
            'nivel',
            //'secreto',
            ['attribute'=>'idDocente', 'label'=>'Profesor', 'value'=> $model->profesor->nombreCompleto],
        ],
    ]) ?>

</div>
