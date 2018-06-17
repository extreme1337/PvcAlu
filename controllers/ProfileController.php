<?php

namespace App\controllers;

class ProfileController extends \App\core\Controller{
    public function show($id){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);
        
        $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
        $profile = $profileModel->getById($id);

        if(!$profile){
            header('Location: '.\Configuration::BASE);
            exit;
        }

        $this->set('profile',$profile);

        $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
        $modelInProfile = $modelModel->getByProfileId($id);
        $this->set('modelInProfile',$modelInProfile);
}
}