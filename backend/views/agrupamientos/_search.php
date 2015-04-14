<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AgrupamientosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agrupamientos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'agrupamiento') ?>

    <?= $form->field($model, 'departamento') ?>

    <?= $form->field($model, 'materia') ?>

    <?= $form->field($model, 'docente') ?>

    <?php // echo $form->field($model, 'curso') ?>

    <?php // echo $form->field($model, 'nivel') ?>

    <?php // echo $form->field($model, 'secreto') ?>

    <?php // echo $form->field($model, 'idDocente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
