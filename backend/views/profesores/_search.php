<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'apellidos') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'web') ?>

    <?php // echo $form->field($model, 'especialidad') ?>

    <?php // echo $form->field($model, 'telef1') ?>

    <?php // echo $form->field($model, 'telef2') ?>

    <?php // echo $form->field($model, 'rol') ?>

    <?php // echo $form->field($model, 'activo')->checkbox() ?>

    <?php // echo $form->field($model, 'acceso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
