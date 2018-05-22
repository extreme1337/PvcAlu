<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ManufacturerModel extends \App\Core\Model {
        public function getByAdminId(int $id) {
            return $this->getAllByFieldName('administrator_id',$id);
        }

        public function getByName(string $name) {
            return $this->getAllByFieldName('name',$name);
        }
}