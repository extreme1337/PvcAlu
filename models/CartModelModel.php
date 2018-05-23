<?php

namespace App\models;
use App\Core\DatabaseConnection;

class CartModelModel extends \App\Core\Model{

    protected function getFields(): array{
        return[
            'cart_model_id' => \App\core\Field::readOnlyInteger(11),
            'added_at'      => \App\core\Field::readOnlyDateTime(),

            'area'         =>  \App\core\Field::editableDecimal(7,2),
            
            'cart_id'       => \App\core\Field::readOnlyInteger(11),
            'model_id'      => \App\core\Field::readOnlyInteger(11)
        ];
    }

        public function getByCartId(int $id) {
            return $this->getAllByFieldName('cart_id',$id);
        }

        public function getByModelId(int $id) {
            return $this->getAllByFieldName('model_id',$id);
        }
}