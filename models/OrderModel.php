<?php

namespace App\models;
use App\Core\DatabaseConnection;

class OrderModel extends \App\Core\Model{

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