<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= Html::a('Create Project', ['project/create-project'], ['class' => 'btn btn-primary']) ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Owner</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($projects as $project): ?>
            <tr>
                <td><?= $project->id ?></td>
                <td><?= $project->project_name ?></td>
                <td><?= $project->project_description ?></td>
                <td><?= $project->project_owner ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
