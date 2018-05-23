<?php

namespace App\models;
use App\Core\DatabaseConnection;

class OrderModel extends \App\Core\Model{

        
    protected function getFields(): array{
        return[
            'order_id'            => \App\core\Field::readOnlyInteger(11),
            'forename'            => \App\core\Field::editableString(64),
            'surename'            => \App\core\Field::editableString(64),
            'residential_address' => \App\core\Field::editableString(255),
            'email'               => \App\core\Field::editableString(255),
            'state'               => \App\core\Field::editableString(255),
            'created_at'          => \App\core\Field::readOnlyDateTime(),
            'cart_id'             => \App\core\Field::readOnlyInteger(11)
            ];
    }

        public function getByName(string $name) {
            return $this->getAllByFieldName('name',$name);
        }
        
        public function getBySurname(string $surname) {
            return $this->getAllByFieldName('surname',$surname);
        }

        public function getByResidentialAddress(string $residentailAddress) {
            return $this->getAllByFieldName('residentail_address',$residentailAddress);
        }

        public function getByState(string $state) {
            return $this->getAllByFieldName('state',$state);
        }   

        public function getByCardId(int $id) {
            return $this->getAllByFieldName('cart_id',$id);
        }
}