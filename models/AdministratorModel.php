<?php

namespace App\Models;
use App\Core\DatabaseConnection;

class AdministratorModel extends \App\Core\Model{

    protected function getFields(): array{
        return[
            'administrator_id' => \App\core\Field::readOnlyInteger(11),

            'email' =>  \App\core\Field::editableString(64),
            'password' =>  \App\core\Field::editableString(128)
        ];
    }

    public function getByEmail(string $email) {
        return $this->getAllByFieldName('email',$email);
    }
}