<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AlumnadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'dni') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido1') ?>

    <?= $form->field($model, 'apellido2') ?>

    <?php // echo $form->field($model, 'apellidos') ?>

    <?php // echo $form->field($model, 'f_nac') ?>

    <?php // echo $form->field($model, 'grupo') ?>

    <?php // echo $form->field($model, 'idGrupo') ?>

    <?php // echo $form->field($model, 'modalidad') ?>

    <?php // echo $form->field($model, 'repite') ?>

    <?php // echo $form->field($model, 'dniTutor1') ?>

    <?php // echo $form->field($model, 'tutor1') ?>

    <?php // echo $form->field($model, 'dniTutor2') ?>

    <?php // echo $form->field($model, 'tutor2') ?>

    <?php // echo $form->field($model, 'direccion1') ?>

    <?php // echo $form->field($model, 'CP') ?>

    <?php // echo $form->field($model, 'localidad') ?>

    <?php // echo $form->field($model, 'provincia') ?>

    <?php // echo $form->field($model, 'telef1') ?>

    <?php // echo $form->field($model, 'telef2') ?>

    <?php // echo $form->field($model, 'nacionalidad') ?>

    <?php // echo $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'clave') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
