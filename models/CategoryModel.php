<?php

namespace App\models;
use App\Core\DatabaseConnection;

class CategoryModel extends \App\core\Model{
     public function getByName(string $name) {
            return $this->getAllByFieldName('name',$name);
        }
}