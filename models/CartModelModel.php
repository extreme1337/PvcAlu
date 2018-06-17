<?php

namespace App\models;
use App\Core\DatabaseConnection;

class CartModelModel extends \App\Core\Model{

    protected function getFields(): array{
        return[
            'cart_model_id'     => \App\core\Field::readOnlyInteger(11),
            'added_at'          => \App\core\Field::readOnlyDateTime(),

            'area'              =>  \App\core\Field::editableFixedDecimal(7,2),
            
            'cart_id'           => \App\core\Field::editableInteger(11),
            'model_id'          => \App\core\Field::editableInteger(11),
            'price_for_model'   => \App\core\Field::editableFixedDecimal(7,2)
        ];
    }

        public function getByCartId(int $id) {
            return $this->getAllByFieldName('cart_id',$id);
        }

        public function getByModelId(int $id) {
            return $this->getAllByFieldName('model_id',$id);
        }
}