<?php

use yii\helpers\Html;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model backend\models\Alumnado */

$this->title = 'Añadir alumno';
$this->params['breadcrumbs'][] = ['label' => 'Alumnados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
