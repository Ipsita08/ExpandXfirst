<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Update Permissions: ' . Html::encode($role->name);
$this->params['breadcrumbs'][] = ['label' => 'Role Dashboard', 'url' => ['dashboard']];
$this->params['breadcrumbs'][] = ['label' => $role->name, 'url' => ['update-permissions', 'id' => $role->id]];
$this->params['breadcrumbs'][] = 'Update Permissions';
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(['method' => 'post']); ?>

<h3>User Stories</h3>
<?= $form->field($role, 'permission_view_user_story')->checkbox() ?>
<?= $form->field($role, 'permission_add_user_story')->checkbox() ?>
<?= $form->field($role, 'permission_modify_user_story')->checkbox() ?>
<?= $form->field($role, 'permission_comment_user_story')->checkbox() ?>
<?= $form->field($role, 'permission_delete_user_story')->checkbox() ?>

<h3>Tasks</h3>
<?= $form->field($role, 'permission_view_tasks')->checkbox() ?>
<?= $form->field($role, 'permission_add_tasks')->checkbox() ?>
<?= $form->field($role, 'permission_modify_tasks')->checkbox() ?>
<?= $form->field($role, 'permission_comment_tasks')->checkbox() ?>
<?= $form->field($role, 'permission_delete_tasks')->checkbox() ?>

<h3>Issues</h3>
<?= $form->field($role, 'permission_view_issues')->checkbox() ?>
<?= $form->field($role, 'permission_add_issues')->checkbox() ?>
<?= $form->field($role, 'permission_modify_issues')->checkbox() ?>
<?= $form->field($role, 'permission_comment_issues')->checkbox() ?>
<?= $form->field($role, 'permission_delete_issues')->checkbox() ?>
<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
