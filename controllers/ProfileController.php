<?php

namespace App\controllers;

class ProfileController extends \App\core\Controller{
    public function show($id){
        $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
        $profile = $profileModel->getById($id);

        if(!$profile){
            header('Location: {{BASE}}');
            exit;
        }

        $this->set('profile',$profile);

        $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
        $modelInProfile = $modelModel->getByProfileId($id);
        $this->set('modelInProfile',$modelInProfile);
}
}