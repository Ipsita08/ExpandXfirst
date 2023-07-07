<?php
namespace app\controllers;
use yii\web\NotFoundHttpException;
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

        return $this->render('view_projects', [
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


public function actionUpdate($id)
{
    $model = ProjectModel::findOne($id);
    if (!$model) {
        throw new NotFoundHttpException('The requested page does not exist.');
    }

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        Yii::$app->session->setFlash('success', 'Project updated successfully.');
       
    }

    return $this->render('update', [
        'model' => $model,
    ]);
}



public function actionDelete($id)
{
    $project = ProjectModel::findOne($id);
    if ($project) {
        $project->delete();
        Yii::$app->session->setFlash('success', 'Project deleted successfully.');
    }
    return $this->redirect(['project/list']);
}

}

