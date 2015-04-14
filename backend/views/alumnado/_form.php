<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Grupos;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Alumnado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'dni')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'apellido1')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'apellido2')->textInput(['maxlength' => 50]) ?>

    <?php
        echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'f_nac',
        'language' => 'es',
        'options' => ['placeholder' => 'Start date'],
        'form' => $form,
        'pluginOptions' => [
            'format' => 'yyyy-M-dd',
            'autoclose' => true,
        ]
    ]); ?>

    <?php  $grupos = Grupos::find()->asArray()->all();
            $listaGrupos = ArrayHelper::map($grupos, 'id', 'cod_grupo');
        echo $form->field($model, 'idGrupo')->dropDownList($listaGrupos) ?>

    <?= $form->field($model, 'modalidad')->textInput(['maxlength' => 40]) ?>

    <?= $form->field($model, 'repite')->dropDownList([0 =>'NO', 1=>'SI']) ?>

    <?= $form->field($model, 'dniTutor1')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'tutor1')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'dniTutor2')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'tutor2')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'direccion1')->textInput(['maxlength' => 160]) ?>

    <?= $form->field($model, 'CP')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'localidad')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'provincia')->textInput(['maxlength' => 70]) ?>

    <?= $form->field($model, 'telef1')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'telef2')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'nacionalidad')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'clave')->textInput(['maxlength' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
