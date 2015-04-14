<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="niveles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
