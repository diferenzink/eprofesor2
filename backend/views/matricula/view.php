<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Matricula */

$this->title = $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Matriculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matricula-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'codigo' => $model->codigo, 'idAgrupamiento' => $model->idAgrupamiento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'codigo' => $model->codigo, 'idAgrupamiento' => $model->idAgrupamiento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigo',
            'idAgrupamiento',
            'agrupamiento',
        ],
    ]) ?>

</div>
