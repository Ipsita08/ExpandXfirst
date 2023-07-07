<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m230707_055831_create_project_table extends Migration
{
    public function up()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'project_name' => $this->string()->notNull(),
            'project_description' => $this->text(),
            'project_owner' => $this->string()->notNull(),
            // add other columns if needed
        ]);
    }

    public function down()
    {
        $this->dropTable('project');
    }
}
