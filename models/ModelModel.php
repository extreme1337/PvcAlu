<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ModelModel extends \App\Core\Model{

    protected function getFields(): array{
        return[
            'model_id'          => \App\core\Field::readOnlyInteger(11),
            'name'              => \App\core\Field::editableString(64),
            'max_width'         => \App\core\Field::editableMaxDecimal(7,2),
            'min_width'         => \App\core\Field::editableMaxDecimal(7,2),
            'max_height'        => \App\core\Field::editableMaxDecimal(7,2),
            'max_height'        => \App\core\Field::editableMaxDecimal(7,2), 
            'administrator_id'  => \App\core\Field::editableInteger(11),
            'picture'           => \App\core\Field::editableString(255), 
            'profile_id'        => \App\core\Field::editableInteger(11)
            ];
    }

        public function getByName(string $name) {
            return $this->getAllByFieldName('name',$name);
        }
        public function getByAdministratorId(int $id) {
            return $this->getAllByFieldName('administrator_id',$id);
        }
        public function getByProfileId(int $id) {
            return $this->getAllByFieldName('profile_id',$id);
        }
        
        
}