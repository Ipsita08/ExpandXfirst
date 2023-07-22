<?php

namespace app\controllers;

use yii\web\Controller;

class MemberController extends Controller
{
    public function actionIndex()
    {
        // Replace this with your actual logic to fetch member data from the backend
        $members = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'role' => 'Admin',
                'status' => 'active',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'role' => 'Member',
                'status' => 'inactive',
            ],
            // Add more members with the 'status' key as needed
        ];
        
        

        return $this->render('index', [
            'members' => $members,
        ]);
    }
}
