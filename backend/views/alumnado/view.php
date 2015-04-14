<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Alumnado */

$this->title = $model->nombreCompleto;
$this->params['breadcrumbs'][] = ['label' => 'Alumnados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->codigo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro de que desea borrar este alumno?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigo',
            'dni',
            'nombre',
            'apellido1',
            'apellido2',
            //'apellidos',
            'f_nac',
            //'grupo',
            //'idGrupo',
             ['attribute'=>'idGrupo', 'label'=>'Grupo', 'value'=> $model->grupo->cod_grupo],
            'modalidad',
            'repite',
            'dniTutor1',
            'tutor1',
            'dniTutor2',
            'tutor2',
            'direccion1',
            'CP',
            'localidad',
            'provincia',
            'telef1',
            'telef2',
            'nacionalidad',
            'mail',
            'clave',
        ],
    ]) ?>

</div>
