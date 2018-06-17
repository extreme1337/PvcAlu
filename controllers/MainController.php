<?php

namespace App\controllers;

class MainController extends \App\Core\Controller {
    

    public function home(){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);
        
        $staraVrednost = $this->getSession()->get('neki_kljuc','/');
        $this->set('podatak',$staraVrednost);
    }

    public function getLogin(){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);

    }

    public function postLogin(){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);
        
        $email = \filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password = \filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $validanPassword = (new \App\Validators\StringValidator())
            ->setMinLength(7)
            ->setMaxLength(120)
            ->isValid($password);

        if ( !$validanPassword) {
            $this->set('message', 'Doslo je do greške: Lozinka nije ispravnog formata.');
            return;
        }

        $administratorModel = new \App\Models\AdministratorModel($this->getDatabaseConnection());

        $admin = $administratorModel->getByFieldName('email',$email);
        if(!$admin){
            $this->set('message','Doslo je do greske korisnik ne postoji');
            return;
        }

        $passwordHash = $admin->password;
        if(password_verify($password,$passwordHash)){
            sleep(1);
            $this->set('message','Doslo je do greske: lozinka nije ispravna');
            return;
        }

        $this->getSession()->put('administrator_id',$admin->administrator_id);
        $this->getSession()->save();

        $this->redirect(\Configuration::BASE . 'user/profile');
    }
}