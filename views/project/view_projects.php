<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\ActionColumn;

$this->title = 'Project Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= Html::a('Create Project', ['project/create-project'], ['class' => 'btn btn-primary']) ?>
 <!-- Update the link URL -->

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Owner</th>
            <th>Actions</th> <!-- Add this column -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td><?= $project->id ?></td>
                <td><?= $project->project_name ?></td>
                <td><?= $project->project_description ?></td>
                <td><?= $project->project_owner ?></td>
                <td>
                    <?= Html::a('<i class="fas fa-pencil-alt"></i>', ['project/update', 'id' => $project->id], ['title' => 'Edit']) ?>
                    <?= Html::a('<i class="fa fa-trash"></i>', ['project/delete', 'id' => $project->id], ['title' => 'Delete', 'data-confirm' => 'Are you sure you want to delete this project?', 'data-method' => 'post']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
