<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Role Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= Html::a('Add Role', ['add'], ['class' => 'btn btn-primary']) ?>
<?= Html::a('View Permissions', ['view-permissions'], ['class' => 'btn btn-warning', 'style' => 'margin-left: 10px']) ?>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($roles as $role): ?>
            <tr>
                <td><?= Html::encode($role->name) ?></td>
                <td>
                    <?= Html::a('Update Permissions', ['update-permissions', 'id' => $role->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $role->id], ['class' => 'btn btn-danger', 'data' => ['confirm' => 'Are you sure you want to delete this role?', 'method' => 'post']]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
