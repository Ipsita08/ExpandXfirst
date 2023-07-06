<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Role extends ActiveRecord
{
    public static function tableName()
    {
        return 'role';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Role name',
        ];
    }

    // Define the permission attributes as public properties
    public $permission_view_user_story;
    public $permission_add_user_story;
    public $permission_modify_user_story;
    public $permission_comment_user_story;
    public $permission_delete_user_story;
    public $permission_view_tasks;
    public $permission_add_tasks;
    public $permission_modify_tasks;
    public $permission_comment_tasks;
    public $permission_delete_tasks;
    public $permission_view_issues;
    public $permission_add_issues;
    public $permission_modify_issues;
    public $permission_comment_issues;
    public $permission_delete_issues;


    public function getPermissions()
    {
        
        return [
            'permission_view_user_story' => 'View User Stories',
            'permission_add_user_story' => 'Add User Stories',
            'permission_modify_user_story' => 'Modify User Stories',
            'permission_comment_user_story' => 'Comment on User Stories',
            'permission_delete_user_story' => 'Delete User Stories',
            'permission_view_tasks' => 'View Tasks',
            'permission_add_tasks' => 'Add Tasks',
            'permission_modify_tasks' => 'Modify Tasks',
            'permission_comment_tasks' => 'Comment on Tasks',
            'permission_delete_tasks' => 'Delete Tasks',
            'permission_view_issues' => 'View Issues',
            'permission_add_issues' => 'Add Issues',
            'permission_modify_issues' => 'Modify Issues',
            'permission_comment_issues' => 'Comment on Issues',
            'permission_delete_issues' => 'Delete Issues',
        ];
    }

    public function getPermissionLabels()
    {
        $permissionLabels = [];
        $permissions = $this->getPermissions();
        foreach ($permissions as $permission => $label) {
            $permissionLabels[$permission] = Yii::t('app', $label);
        }
        return $permissionLabels;
    }

    public function getPermissionsAsString()
{
    $permissions = $this->getPermissions();
    $assignedPermissions = [];
    foreach ($permissions as $permission => $label) {
        if ($this->getAttribute($permission)) {
            $assignedPermissions[] = $label;
        }
    }
    return implode(', ', $assignedPermissions);
}


    public function savePermissions($permissions)
    {
        if (!is_array($permissions)) {
            $permissions = []; // Set default value if $permissions is null
        }
    
        // Define an array of all available permissions
        $availablePermissions = $this->getPermissions();
    
        // Iterate over all available permissions and save their values
        foreach ($availablePermissions as $permission => $label) {
            $this->setAttribute($permission, isset($permissions[$permission]) ? 1 : 0);
        }
    
        // Set unchecked permissions to 0 explicitly
        foreach ($permissions as $permission => $value) {
            if (!$value) {
                $this->setAttribute($permission, 0);
            }
        }
    
        // Save the role with the updated permissions
        return $this->save(false); // Use save(false) to skip validation
}
}