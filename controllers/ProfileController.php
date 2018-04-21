<?php

namespace App\controllers;

class ProfileController extends \App\core\Controller{
    public function show($id){
        $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
        $profile = $profileModel->getById($id);

        if(!$profile){
            header('Location: /PvcAlu/');
            exit;
        }

        $this->set('profile',$profile);

}
}