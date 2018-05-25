<?php

namespace App\controllers;

class MainController extends \App\Core\Controller {
    

    public function home(){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);

        //$this->getSession()->put('neki_kljuc','Neka vrednost' . rand(100,999));
        $staraVrednost = $this->getSession()->get('neki_kljuc','/');
        $this->set('podatak',$staraVrednost);
    }
}