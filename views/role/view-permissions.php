<?php

use yii\helpers\Html;

$this->title = 'View Permissions';
$this->params['breadcrumbs'][] = $this->title;
?>




<div class="permissions-container">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="permissions-section">
        <h2>User Story</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Permission</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>View</td>
                    <td><?= $role->permission_view_user_story ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><?= $role->permission_add_user_story ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Modify</td>
                    <td><?= $role->permission_modify_user_story ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Comment</td>
                    <td><?= $role->permission_comment_user_story ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Delete</td>
                    <td><?= $role->permission_delete_user_story ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="permissions-section">
        <h2>Tasks</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Permission</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>View</td>
                    <td><?= $role->permission_view_tasks ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><?= $role->permission_add_tasks ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Modify</td>
                    <td><?= $role->permission_modify_tasks ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Comment</td>
                    <td><?= $role->permission_comment_tasks ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Delete</td>
                    <td><?= $role->permission_delete_tasks ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="permissions-section">
        <h2>Issues</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Permission</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>View</td>
                    <td><?= $role->permission_view_issues ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><?= $role->permission_add_issues ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Modify</td>
                    <td><?= $role->permission_modify_issues ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Comment</td>
                    <td><?= $role->permission_comment_issues ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
                <tr>
                    <td>Delete </td>
                    <td><?= $role->permission_delete_issues ? 'Assigned' : 'Not Assigned' ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php foreach ($role->permissions as $permission): ?>
    <tr>
        <td><?= Html::encode($permission->name) ?></td>
        <td>
            <?php if ($permission->assigned): ?>
                <?= Html::tag('span', 'Assigned', ['class' => 'permission-assigned']) ?>
            <?php else: ?>
                <?= Html::tag('span', 'Not Assigned', ['class' => 'permission-not-assigned']) ?>
            <?php endif; ?>
        </td>
    </tr>
<?php endforeach; ?>
<style>
    .permissions-container {
        margin-top: 20px;
    }

    .permissions-section {
        margin-bottom: 30px;
    }

    .permissions-section h2 {
        margin-bottom: 10px;
    }

    .table {
        width: 100%;
        max-width: 800px;
    }
</style>
