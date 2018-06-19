<?php

namespace App\controllers;

class CartController extends \App\core\Controller{

    public function show(){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);
        
        $sessionId = $this->getSessionId();

        $orderCartModel = new \App\models\CartModelModel($this->getDatabaseConnection());
        $order = $orderCartModel->selectTableInnerJoin($sessionId);
        $this->set('cartModelModel', $order);
        
        $cartModel = $orderCartModel->getAll();
        $this->set('cartModel',$cartModel);
        $deleteById = \filter_input(INPUT_POST,'cart_model_id', FILTER_SANITIZE_NUMBER_INT);
        //$deleteModelFromCart = $orderCartModel->deleteById($deleteById);
        
        }
                

    public function orderFromCart(){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);

        $orderCartModel = new \App\models\CartModelModel($this->getDatabaseConnection());
        $order = $orderCartModel->selectTableInnerJoin($this->getSessionId());
        $this->set('cartModelModel', $order);
        
    }


    public function postOrderFromCart(){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);

        $sessionId = $this->getSessionId();
        $model = new \App\models\ModelModel($this->getDatabaseConnection());
        $modelsInCart = $model->selectWithTreeTables('model','cart','session_number',$sessionId);
        $this->set('modelsInCart',$modelsInCart);

        
        $forename = \filter_input(INPUT_POST,'forename', FILTER_SANITIZE_STRING);
        $surename = \filter_input(INPUT_POST,'surename', FILTER_SANITIZE_STRING);
        $residential_address = \filter_input(INPUT_POST,'residential_address', FILTER_SANITIZE_STRING);
        $email = \filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING);
        $cartModel = new \App\models\CartModel($this->getDatabaseConnection());
        $cartId = (array)$cartModel->getByFieldName('session_number',$this->getSessionId());
        


        $orderModel = new \App\models\OrderCartModel($this->getDatabaseConnection());
        
        if(!$orderModel){
            $this->set('Location: '.\Configuration::BASE);
        }
        $orderModel->add([
            'forename' => $forename,
            'surname' => $surename,
            'residential_address' => $residential_address,
            'email'=> $email,
            'cart_id' => $cartId['cart_id']        
        ]);


    }

    


}