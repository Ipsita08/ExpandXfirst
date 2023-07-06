<?php

use yii\db\Migration;

/**
 * Class m230705_122352_create_user_roles
 */
class m230705_122352_create_user_roles extends Migration
{/**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('role', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'permission_view_user_stories' => $this->boolean()->defaultValue(true),
            'permission_add_user_stories' => $this->boolean()->defaultValue(true),
            'permission_modify_user_stories' => $this->boolean()->defaultValue(true),
            'permission_comment_user_stories' => $this->boolean()->defaultValue(true),
            'permission_delete_user_stories' => $this->boolean()->defaultValue(true),
            'permission_view_tasks' => $this->boolean()->defaultValue(true),
            'permission_add_tasks' => $this->boolean()->defaultValue(true),
            'permission_modify_tasks' => $this->boolean()->defaultValue(true),
            'permission_comment_tasks' => $this->boolean()->defaultValue(true),
            'permission_delete_tasks' => $this->boolean()->defaultValue(true),
            'permission_view_issues' => $this->boolean()->defaultValue(true),
            'permission_add_issues' => $this->boolean()->defaultValue(true),
            'permission_modify_issues' => $this->boolean()->defaultValue(true),
            'permission_comment_issues' => $this->boolean()->defaultValue(true),
            'permission_delete_issues' => $this->boolean()->defaultValue(true),
        ]);
}
}
