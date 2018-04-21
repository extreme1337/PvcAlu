<?php

namespace App\controllers;

class CategoryController extends \App\core\Controller{
    public function show($id){
        $categoryModel = new \App\models\CategoryModel($this->getDatabaseConnection());
        $category = $categoryModel->getById($id);
        $this->set('category',$category);
    }    
}