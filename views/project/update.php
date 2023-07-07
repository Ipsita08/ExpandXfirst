<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Update Project: ' . $model->project_name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['project/list']];
$this->params['breadcrumbs'][] = 'Update';

$form = ActiveForm::begin([
    'id' => 'update-project-form',
    'options' => ['class' => 'form-horizontal'],
]);
?>

<?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'project_description')->textarea(['rows' => 6]) ?>

<?= $form->field($model, 'project_owner')->textInput(['maxlength' => true]) ?>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
