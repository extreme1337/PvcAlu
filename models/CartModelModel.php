<?php

namespace App\models;
use App\Core\DatabaseConnection;

class CartModelModel extends \App\Core\Model{

        public function getByCartId(int $id) {
            return $this->getAllByFieldName('cart_id',$id);
        }

        public function getByModelId(int $id) {
            return $this->getAllByFieldName('model_id',$id);
        }
}