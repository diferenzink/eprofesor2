<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AlumnadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnado';
?>
<div class="alumnado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar alumno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigo',
            'dni',
            'nombre',
            'apellido1',
            'apellido2',
            // 'apellidos',
            // 'f_nac',
            // 'grupo',
            // 'idGrupo',
            // 'modalidad',
            // 'repite',
            // 'dniTutor1',
            // 'tutor1',
            // 'dniTutor2',
            // 'tutor2',
            // 'direccion1',
            // 'CP',
            // 'localidad',
            // 'provincia',
            // 'telef1',
            // 'telef2',
            // 'nacionalidad',
            // 'mail',
            // 'clave',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
