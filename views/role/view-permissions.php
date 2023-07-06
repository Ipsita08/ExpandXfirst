<?php

use yii\helpers\Html;

$this->title = 'View Permissions';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<table class="table">
    <thead>
        <tr>
            <th>Role</th>
            <?php foreach ($roles[0]->getPermissions() as $permission => $label): ?>
                <th><?= Html::encode($label) ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($roles as $role): ?>
            <tr>
                <td><?= Html::encode($role->name) ?></td>
                <?php foreach ($role->getPermissions() as $permission => $label): ?>
                    <td>
                        <?php if ($role->getAttribute($permission)): ?>
                            <?= Html::tag('span', 'Assigned', ['class' => 'permission-assigned']) ?>
                        <?php else: ?>
                            <?= Html::tag('span', 'Not Assigned', ['class' => 'permission-not-assigned']) ?>
                        <?php endif; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<style>
    .permission-assigned {
        color: green;
    }

    .permission-not-assigned {
        color: red;
    }
</style>
