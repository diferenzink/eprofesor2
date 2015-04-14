<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Grupos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_grupo')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'tut1_grupo')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'niv_grupo')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'cur_grupo')->textInput(['maxlength' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
