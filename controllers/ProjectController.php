<?php
namespace app\controllers;

use app\models\ProjectModel;
use Yii;
use yii\web\Controller;

class ProjectController extends Controller
{
    public function actionCreateProject()
    {
        $model = new ProjectModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Project Created Successfully');
            
        }

        return $this->render('create_project', [
            'model' => $model,
        ]);
    }

    public function actionList()
    {
        $projects = ProjectModel::find()->all();

        return $this->render('list', [
            'projects' => $projects,
        ]);
    }

    public function actionViewProjects()
    {
        $projects = ProjectModel::find()->all();

        return $this->render('view_projects', [
            'projects' => $projects,
        ]);
    }
}

