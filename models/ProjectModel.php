<?php

namespace app\models;

use yii\db\ActiveRecord;

class ProjectModel extends ActiveRecord
{
    public $is_public;
    public static function tableName()
    {
        return 'project';
    }

    public function rules()
    {
        return [
            [['project_name', 'project_owner'], 'required'],
            [['project_name', 'project_owner'], 'string', 'max' => 255],
            [['project_description'], 'string'],
        ];
    }
}

