<?php

namespace App\controllers;

class ModelController extends \App\core\Controller{
    private $modelId;
    private $sessionId;
    public function show($id){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);

        $sessionId = $this->getSessionId();
        $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
        $model = $modelModel->getById($id);
        $this->modelId = $id;

        if(!$model){
            header('Location: '.\Configuration::BASE);
            exit;
        }

        $this->set('model',$model);

        $modelViewModel = new \App\models\ModelViewModel($this->getDatabaseConnection());
        $ipAddress = \filter_input(INPUT_SERVER, 'REMOTE_ADDR');
        $userAgent = \filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
        $modelViewModel->add(
            [
                'model_id'   => $id,
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent
            ]
            );
    }
    public function addToCart($modelId){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);

        $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
        $model = $modelModel->getById($modelId);
        $sessionId = $this->getSessionId();
        $this->set('model',$model);
    }
    public function postAddToCart($modelId){
        $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
        $categories = $categoryModel->getAll();
        $this->set('categories',$categories);
        
        $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
        $model = $modelModel->getById($modelId);
        $this->set('model',$model);
        if(!$model){
            header('Location: '.\Configuration::BASE.profile/model/'.$modelId');
            exit;
        }
        $width = \filter_input(INPUT_POST, 'width');
        $height = \filter_input(INPUT_POST, 'height');
        if(!($width >= $model->min_width && $width <= $model->max_width)){
            $this->set('message','Unesena sirina ne moze biti porucena');
            return;
        }
        if(!($height >= $model->min_height && $height <= $model->max_height)){
            $this->set('message','Unesena visina ne moze biti porucena');
            return;
        }
        
        $area  = $width * $height;
        $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
        $priceForModel = $profileModel->innerJoinTwoTables($modelId);
        $price = $area * $priceForModel['price_per_unit_area'];

            
        $cartModel = new \App\models\CartModel($this->getDatabaseConnection());
        $cartModel->add([
            'session_number' => $this->getSessionId()
        ]);
        $cartId = $cartModel->selectIdWhereFieldName('session_number', $this->getSessionId());
        
        $cartModelModel = new \App\models\CartModelModel($this->getDatabaseConnection());
        
        $cartModelModel->add([
            'area' => (float)$area,
            'cart_id' =>$cartId['cart_id'],
            'model_id' => $modelId,
            'price_for_model' => $price
        ]);
        $this->set('message','Uspesno ste dodali proizvod u korpu');
        //header('Location: '.\Configuration::BASE);
    }
}