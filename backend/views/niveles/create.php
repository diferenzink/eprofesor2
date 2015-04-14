<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Profesores */

$this->title = 'Añadir nivel';
?>
<div class="niveles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
