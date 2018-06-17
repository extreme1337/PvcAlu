<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ProfileModel extends \App\Core\Model{
            
    protected function getFields(): array{
        return[
            'profile_id'            => \App\core\Field::readOnlyInteger(11),
            'name'                  => \App\core\Field::editableString(64),
            'picture'               => \App\core\Field::editableString(255),
            'description'           => \App\core\Field::editableString(64*1024),
            'price_per_unit_area'   => \App\core\Field::editableMaxDecimal(7,2),
            'administrator_id'      => \App\core\Field::editableInteger(11),
            'category_id'           => \App\core\Field::editableInteger(11),
            'manufacturer_id'       => \App\core\Field::editableInteger(11)
            ];
    }

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