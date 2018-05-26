<?php

namespace App\controllers;

class ModelController extends \App\core\Controller{
    public function show($id){
        $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
        $model = $modelModel->getById($id);

        if(!$model){
            header('Location: {{BASE}}');
            exit;
        }

        $this->set('model',$model);

        $modelViewModel = new \App\models\ModelViewModel($this->getDatabaseConnection());
        $ipAddress = filter_input(INPUT_SERVER, 'REMOTE_ADDR');
        $userAgent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
        $modelViewModel->add(
            [
                'model_id'   => $id,
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent
            ]
            );
    }
}