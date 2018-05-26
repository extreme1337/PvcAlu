<?php

namespace App\controllers;

class CategoryController extends \App\core\Controller{
    public function show($id){
        $categoryModel = new \App\models\CategoryModel($this->getDatabaseConnection());
        $category = $categoryModel->getById($id);
        if(!$category){
            header('Location: {{BASE}}');
            exit;
        }
        $this->set('category',$category);

        $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
        $profileInCategory = $profileModel->getByCategoryId($id);
        $this->set('profileInCategory',$profileInCategory);
    }    
}