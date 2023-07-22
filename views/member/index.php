<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Members';
?>
<div class="site-index">

    <h1><?= $this->title ?></h1>

    <table id="members-table" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $member): ?>
            <tr>
                <td><?= $member['id'] ?></td>
                <td>
                    <div>
                        <?= $member['name'] ?>
                    </div>
                    <div class="email">
                        <?= $member['email'] ?>
                    </div>
                </td>
                <td>
                    <select class="form-select">
                        <option value="Admin" <?= $member['role'] === 'Admin' ? 'selected' : '' ?>>Admin</option>
                        <option value="Member" <?= $member['role'] === 'Member' ? 'selected' : '' ?>>Member</option>
                        <option value="Guest" <?= $member['role'] === 'Guest' ? 'selected' : '' ?>>Guest</option>
                    </select>
                </td>
                <td>
                    <?php if (isset($member['status']) && $member['status'] !== 'active'): ?>
                        <?= Html::a('Resend', ['site/send-invitation', 'email' => $member['email']], ['class' => 'btn btn-primary']) ?>
                    <?php else: ?>
                        Active
                    <?php endif; ?>
                </td>
                <td>
                    <?= Html::a(
                        '<i class="fa fa-trash"></i>',
                        ['member/delete', 'id' => $member['id']],
                        [
                            'class' => 'btn btn-danger',
                            'data-confirm' => 'Are you sure you want to delete this member?',
                            'title' => 'Delete',
                        ]
                    ) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
