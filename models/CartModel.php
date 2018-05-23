<?php

namespace App\models;
use App\Core\DatabaseConnection;

class CartModel extends \App\Core\Model{

    protected function getFields(): array{
        return[
            'cart_id'         => \App\core\Field::readOnlyInteger(11),
            'created_at'      => \App\core\Field::readOnlyDateTime(),
            'session_number'  => \App\core\Field::editableString(7,2)
        ];
    }

        public function getSessinNumber(string $sessionNumber) {
            return $this->getAllByFieldName('session_number',$sessionNumber);
        }   
}