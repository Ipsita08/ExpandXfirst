<?php

namespace app\controllers;

use app\models\Role;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class RoleController extends Controller
{
    // Action to display the role dashboard
    public function actionDashboard()
    {
        $roles = Role::find()->all();

        return $this->render('dashboard', [
            'roles' => $roles,
        ]);
    }

    public function actionAdd()
    {
        $model = new Role();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->savePermissions(Yii::$app->request->post('Role'));
            return $this->redirect(['dashboard']);
        } else {
            var_dump($model->errors); // Add this line to check for validation errors
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }

    public function actionUpdatePermissions($id)
    {
        $role = Role::findOne($id);
    
        if ($role->load(Yii::$app->request->post()) && $role->validate()) {
            $permissions = Yii::$app->request->post('Role');
            $role->savePermissions($permissions);
            // Retrieve the updated role from the database
            $role = Role::findOne($id);
            return $this->redirect(['view-permissions', 'id' => $role->id]);
        }
    
        return $this->render('update-permissions', [
            'role' => $role,
        ]);
    }
    







    public function actionDelete($id)
    {
        $role = $this->findRole($id);
        $role->delete();

        Yii::$app->session->setFlash('success', 'Role deleted successfully.');
        return $this->redirect(['dashboard']);
    }

    protected function findRole($id)
    {
        $role = Role::findOne($id);

        if ($role === null) {
            throw new NotFoundHttpException('The requested role does not exist.');
        }

        return $role;
    }
    public function actionViewPermissions($id)
{
    $role = $this->findRole($id);
    $roles = Role::find()->all();

    return $this->render('view-permissions', [
        'role' => $role,
        'roles' => $roles,
    ]);
}

}




    
    
   

