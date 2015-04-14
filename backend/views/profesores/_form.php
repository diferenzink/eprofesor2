<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profesores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 45]) ?>


    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'web')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'especialidad')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'telef1')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'telef2')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'rol')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'activo')->checkbox() ?>

    <?= $form->field($model, 'acceso')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Añadir' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
