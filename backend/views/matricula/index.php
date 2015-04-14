<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use backend\models\Agrupamientos;
use backend\models\Alumnado;
use backend\models\Grupos;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MatriculaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matriculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matricula-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Matricula', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
        $alumnos = Alumnado::find()->asArray()->all();  
        for ($i=0;$i<count($alumnos);$i++) 
        {
            $alumnos[$i]['nombreCompleto']=$alumnos[$i]['apellido1'].' '.$alumnos[$i]['apellido2'].', '.$alumnos[$i]['nombre'];
            $alumnos[$i]['nombreClase'] = Grupos::findOne($alumnos[$i]['idGrupo'])->cod_grupo;
        } 
        $listaAlumnos = ArrayHelper::map($alumnos, 'codigo', 'nombreCompleto', 'nombreClase');
        $agrupamientos = Agrupamientos::find()->asArray()->all();  
        $listaAgrupamientos = ArrayHelper::map($agrupamientos, 'id', 'agrupamiento');
        
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'codigo',
            ['attribute'=>'codigo', 'filter'=>$listaAlumnos, 'label'=>'Alumno', 'value'=>function ($model, $index, $widget) { return $model->alumno->nombreCompleto; }],
            //'idAgrupamiento',
            //'agrupamiento',
             ['attribute'=>'idAgrupamiento', 'filter'=>$listaAgrupamientos, 'label'=>'Agrupamiento', 'value'=>function ($model, $index, $widget) { return $model->agrupamiento->agrupamiento; }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
