<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Profesores;
/* @var $this yii\web\View */
/* @var $model app\models\Agrupamientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agrupamientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'agrupamiento')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'departamento')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'materia')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'curso')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'nivel')->textInput(['maxlength' => 6]) ?>

    <?php  $profesores = Profesores::find()->asArray()->all();
        for ($i=0;$i<count($profesores);$i++) 
        {
            $profesores[$i]['nombreCompleto']=$profesores[$i]['apellidos'].', '.$profesores[$i]['nombre'];
        }      
        $listaProfesores = ArrayHelper::map($profesores, 'id', 'nombreCompleto');
        echo $form->field($model, 'idDocente')->dropDownList($listaProfesores) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Añadir' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
