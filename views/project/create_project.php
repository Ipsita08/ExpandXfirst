<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'create-project-form',
    'options' => ['class' => 'form-horizontal'],
]);
?>

<?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'project_description')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'project_owner')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'is_public')->checkbox() ?>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <?= Html::submitButton('Create', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('View Projects', ['project/view-projects'], ['class' => 'btn btn-success']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
