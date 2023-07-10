<?php

use yii\helpers\Html;

$this->title = 'View Permissions: ' . Html::encode($role->name);
$this->params['breadcrumbs'][] = ['label' => 'Role Dashboard', 'url' => ['dashboard']];
$this->params['breadcrumbs'][] = ['label' => $role->name, 'url' => ['view-permissions', 'id' => $role->id]];
$this->params['breadcrumbs'][] = 'View Permissions';
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
                    <td><?= $role->getAttribute('permission_view_user_story') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><?= $role->getAttribute('permission_add_user_story') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Modify</td>
                    <td><?= $role->getAttribute('permission_modify_user_story') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Comment</td>
                    <td><?= $role->getAttribute('permission_comment_user_story') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Delete</td>
                    <td><?= $role->getAttribute('permission_delete_user_story') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
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
                    <td><?= $role->getAttribute('permission_view_tasks') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><?= $role->getAttribute('permission_add_tasks') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Modify</td>
                    <td><?= $role->getAttribute('permission_modify_tasks') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Comment</td>
                    <td><?= $role->getAttribute('permission_comment_tasks') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Delete</td>
                    <td><?= $role->getAttribute('permission_delete_tasks') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
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
                    <td><?= $role->getAttribute('permission_view_issues') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Add</td>
                    <td><?= $role->getAttribute('permission_add_issues') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Modify</td>
                    <td><?= $role->getAttribute('permission_modify_issues') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Comment</td>
                    <td><?= $role->getAttribute('permission_comment_issues') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
                <tr>
                    <td>Delete</td>
                    <td><?= $role->getAttribute('permission_delete_issues') ? '<span class="assigned">Assigned</span>' : '<span class="not-assigned">Not Assigned</span>' ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

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
    
    .assigned {
        color: green;
        font-weight: bold;
    }
    
    .not-assigned {
        color: red;
        font-weight: bold;
    }
</style>
