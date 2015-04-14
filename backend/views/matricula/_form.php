<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dosamigos\multiselect\MultiSelect;
use backend\models\Alumnado;
use backend\models\Agrupamientos;
use backend\models\Grupos;
/* @var $this yii\web\View */
/* @var $model app\models\Matricula */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
        $alumnos = Alumnado::find()->asArray()->all();  
        for ($i=0;$i<count($alumnos);$i++) 
        {
            $alumnos[$i]['nombreCompleto']=$alumnos[$i]['apellido1'].' '.$alumnos[$i]['apellido2'].', '.$alumnos[$i]['nombre'];
            $alumnos[$i]['nombreClase'] = Grupos::findOne($alumnos[$i]['idGrupo'])->cod_grupo;
        } 
        $listaAlumnos = ArrayHelper::map($alumnos, 'codigo', 'nombreCompleto', 'nombreClase');
        $agrupamientos = Agrupamientos::find()->asArray()->all();  
        $listaAgrupamientos = ArrayHelper::map($agrupamientos, 'id', 'agrupamiento');
        
    ?>

<div class="matricula-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'idAgrupamiento')->textInput() ?>

    <?= $form->field($model, 'agrupamiento')->textInput(['maxlength' => 10]) ?>

    <?= MultiSelect::widget([
    "options" => ['multiple'=>"multiple"], // for the actual multiselect	
    'model' => $model,
    'attribute' => 'codigo',
    'data' => $listaAlumnos
]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
