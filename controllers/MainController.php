<?php

namespace App\controllers;

class MainController extends \App\Core\Controller {
    

    public function home(){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);
    }
}