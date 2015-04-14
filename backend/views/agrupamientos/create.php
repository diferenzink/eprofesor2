<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Agrupamientos */

$this->title = 'Añadir agrupamiento';
?>
<div class="agrupamientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
