<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ModelModel extends \App\Core\Model{


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