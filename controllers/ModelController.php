<?php

namespace App\controllers;

class ModelController extends \App\core\Controller{
    public function show($id){
        $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
        $model = $modelModel->getById($id);

        if(!$model){
            header('Location: {{BASE}}');
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
    public function addToCart(){}
    public function postAddToCart(){
        $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
        
        $width = \filter_input(INPUT_POST, 'width', FILTER_SANITIZE_NUMBER_DECIMAL);
        $height = \filter_input(INPUT_POST, 'height', FILTER_SANITIZE_NUMBER_DECIMAL);
        if($width >= $modelModel.minWidth && $width <= $modelModel.maxWidth){
            $this->set('message','Unesena sirina ne moze biti porucena');
            return;
        }
        if($height >= $modelModel.minHeight && $height <= $modelModel.maxHeight){
            $this->set('message','Unesena visina ne moze biti porucena');
            return;
        }
        $area1 = $width * $height;
        $area = \filter_input(INPUT_POST, $area1 , FILTER_SANITIZE_NUMBER_DECIMAL);

        $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
        $priceForModel = $area1 * $profileModel.price_per_unit_area;
        $price_of_model = \filter_input(INPUT_POST,$priceForModel,FILTER_SANITIZE_NUMBER_DECIMAL);


        $cartModel = new \App\models\CartModel($this->getDatabaseConnection());
        $cartModel->add([]);
    }
}