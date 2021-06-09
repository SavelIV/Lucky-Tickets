<?php

/* @var $this yii\web\View */
/* @var $model \app\models\forms\CountForm */
/* @var integer $result */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Count Lucky Tickets';
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="count-form">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'startInterval')->textInput() ?>
        <?= $form->field($model, 'endInterval')->textInput() ?>
        <div class="form-group">
            <?= Html::submitButton('Run', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <?php if ($result): ?>
    <p style="color:darkred">Number of tickets: <?= $result ?></p>
    <?php endif;?>


</div>
