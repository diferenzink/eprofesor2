<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfesoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profesores';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="profesores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Añadir profesor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            //'password',
            //'auth_key',
            //'password_reset_token',
             'nombre',
             'apellidos',
            // 'email:email',
            // 'web',
            // 'especialidad',
            // 'telef1',
            // 'telef2',
            // 'rol',
            // 'activo:boolean',
            // 'acceso',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
