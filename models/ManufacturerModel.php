<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ManufacturerModel extends \App\Core\Model {

    protected function getFields(): array{
        return[
            'manufacturer_id'   => \App\core\Field::readOnlyInteger(11),

            'name'              => \App\core\Field::editableString(64),
            
            'administrator_id'  => \App\core\Field::editableInteger(11)
            ];
    }

        public function getByAdminId(int $id) {
            return $this->getAllByFieldName('administrator_id',$id);
        }

        public function getByName(string $name) {
            return $this->getAllByFieldName('name',$name);
        }
}