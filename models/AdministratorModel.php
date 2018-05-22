<?php

namespace App\Models;
use App\Core\DatabaseConnection;

class AdministratorModel extends \App\Core\Model{
    public function getByEmail(string $email) {
        return $this->getAllByFieldName('email',$email);
    }
}