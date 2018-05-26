<?php

namespace App\controllers;

class CartController extends \App\core\Controller{

    public function show($id = 1){
        $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
        $model = $modelModel->getById($id);

        if(!$model){
            header('Location: {{BASE}}');
            exit;
        }

        $this->set('model',$model);

        $modelViewModel = new \App\models\ModelViewModel($this->getDatabaseConnection());
        $ipAddress = filter_input(INPUT_SERVER, 'REMOTE_ADDR');
        $userAgent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
        $modelViewModel->add(
            [
                'model_id'   => $id,
                'ip_address' => $ipAddress,
                'user_agent' => $userAgent
            ]
            );
    }
    public function getCart() {
        $carts = $this->getSession()->get('cart', []);
        $this->set('cart', $carts);
    }

    public function addCart($modelId) {
        $modelModel = new \App\Models\ModelModel($this->getDatabaseConnection());
        $model = $modelModel->getById($modelId);

        if (!$model) {
            $this->set('error', -1);
            return;
        }

        $carts = $this->getSession()->get('cart', []);

        foreach ($carts as $cart) {
            if ($cart->model_id == $modelId) {
                $this->set('error', -2);
                return;
            }
        }

        $carts[] = $model;
        $this->getSession()->put('cart', $carts);

        $this->set('error', 0);
    }


}