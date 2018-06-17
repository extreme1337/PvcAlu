<?php

namespace App\models;
use App\Core\DatabaseConnection;

class CategoryModel extends \App\core\Model{

    protected function getFields(): array{
        return[
            'category_id' => \App\core\Field::readOnlyInteger(11),
            'name'        => \App\core\Field::editableString(64),
            'picture'     => \App\core\Field::editableString(255),
            'description'        => \App\core\Field::editableString(64*1024),
            'administrator_id' => \App\core\Field::editableInteger(11)
            ];
    }

     public function getByName(string $name) {
            return $this->getAllByFieldName('name',$name);
        }
}