<?php

namespace App\controllers;

class CartController extends \App\core\Controller{

    public function show(){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);
        
        $sessionId = $this->getSessionId();
        $cartModelModel = new \App\models\CartModelModel($this->getDatabaseConnection());
        

        $orderCartModel = new \App\models\CartModelModel($this->getDatabaseConnection());
        $order = $orderCartModel->selectTableInnerJoin($sessionId);
        $this->set('cartModelModel', $order);
        
        //$orderLength = sizeof($order);
        //for($i = 0 ; $i<$orderLength ; $i++){  
            //print_r($order[$i]['cart_model_id']);
            //exit;                  
            //if(isset($_REQUEST['delete'])){
                //$order->deleteById($order[$i]['cart_model_id']);            
            //}
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

        
        $forename = \filter_input(INPUT_POST,'forename');
        $surename = \filter_input(INPUT_POST,'surename');
        $residential_address = \filter_input(INPUT_POST,'residential_address');
        $email = \filter_input(INPUT_POST,'email');
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