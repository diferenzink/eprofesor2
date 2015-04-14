<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use backend\models\Profesores;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AgrupamientosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agrupamientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agrupamientos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Añadir agrupamiento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
        $profesores = Profesores::find()->asArray()->all();
        for ($i=0;$i<count($profesores);$i++) 
        {
            $profesores[$i]['nombreCompleto']=$profesores[$i]['apellidos'].', '.$profesores[$i]['nombre'];
        }      
        $listaProfesores = ArrayHelper::map($profesores, 'id', 'nombreCompleto');
        
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'agrupamiento',
            //'departamento',
            'materia',
            ['attribute'=>'idDocente', 'filter'=>$listaProfesores, 'label'=>'Profesor', 'value'=>function ($model, $index, $widget) { return $model->profesor->nombreCompleto; }],
            //['label'=>'Profesor', 'value'=>function ($model, $index, $widget) { return $model->profesor->username; }],
            //'docente',
            // 'curso',
            // 'nivel',
            // 'secreto',
            // 'idDocente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
