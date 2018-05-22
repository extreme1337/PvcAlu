<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ProfileModel extends \App\Core\Model{

        public function getByName(string $name) {
            return $this->getAllByFieldName('name',$name);
        }
        public function getByAdministratorId(int $id) {
            return $this->getByFieldName('administrator_id',$id);
        }
        public function getByCategoryId(int $id) {
            $items =  $this->getAllByFieldName('category_id',$id);
            \usort($items, function($a,$b){
                return strcmp($a->price_per_unit_area, $b->price_per_unit_area);
            });
            return $items;
        }
        public function getByManufacturerId(int $id) {
            return $this->getByFieldName('manufacturer_id',$id);
        }
        

}