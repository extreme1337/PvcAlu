<?php

namespace App\models;
use App\Core\DatabaseConnection;

class CartModel extends \App\Core\Model{
        public function getSessinNumber(string $sessionNumber) {
            return $this->getAllByFieldName('session_number',$sessionNumber);
        }   
}