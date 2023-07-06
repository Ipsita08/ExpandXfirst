<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Role; // Import the Role model

$role = new Role(); // Create an instance of the Role model

$this->title = 'Add Role';
$this->params['breadcrumbs'][] = ['label' => 'Role Dashboard', 'url' => ['dashboard']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($role, 'name')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>
