<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ModelViewModel extends \App\Core\Model{

    
    protected function getFields(): array{
        return[
            'model_view_id' => \App\core\Field::readOnlyInteger(11),
            'created_at' => \App\core\Field::readOnlyDateTime(),


            'model_id' => \App\core\Field::editableInteger(11),
            'ip_address' =>  \App\core\Field::editableIpAddress(),
            'user_agent' =>  \App\core\Field::editableString(255)
        ];
    }

    public function getAllByModelId(int $id): array {
        return $this->getAllByFieldName('model_id',$id);
    }
    public function getAllByIpAddress(string $ipAddress):array {
        return $this->getAllByFieldName('ip_address',$ipAddress);
    }
        
}