<?php
    namespace App\Core;

    abstract class Model {
        private $dbc;

        final public function __construct(DatabaseConnection &$dbc) {
            $this->dbc = $dbc;
        }

        protected function getFields(): array {
            return [];
        }

        final protected function getDatabaseConnection() {
            return $this->dbc->getDatabaseConnection();
        }

        final private function getTableName(): string {
            $matches = [];
            preg_match('|^.*\\\((?:[A-Z][a-z]+)+)Model$|', static::class, $matches);
            return substr(strtolower(preg_replace('|[A-Z]|', '_$0', $matches[1] ?? '')), 1);
        }
        

        final public function getById(int $id) {
            $tableName = $this->getTableName();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE ' . $tableName . '_id = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$id]);
            $item = NULL;
            if ($res) {
                $item = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $item;
        }

        final public function getAll(): array {
            $tableName = $this->getTableName();
            $sql = 'SELECT * FROM ' . $tableName . ';';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();
            $items = [];
            if ($res) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }
        final public function getAllArray(): array {
            $tableName = $this->getTableName();
            $sql = 'SELECT * FROM ' . $tableName . ';';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();
            $items = [];
            if ($res) {
                $items = $prep->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $items;
        }

        final private function isFieldValueValid(string $fieldName, $fieldValue): bool {
            $fields = $this->getFields();
            $supportedFieldNames = array_keys($fields);

            if (!in_array($fieldName, $supportedFieldNames)) {
                return false;
            }

            return $fields[$fieldName]->isValid($fieldValue);
        }

        final public function getByFieldName(string $fieldName, $value) {
            if (!$this->isFieldValueValid($fieldName, $value)) {
                throw new Exception('Invalid field name or value: ' . $fieldName);
            }

            $tableName = $this->getTableName();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE ' . $fieldName . ' = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$value]);
            $item = NULL;
            if ($res) {
                $item = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $item;
        }

        final public function getAllByFieldName(string $fieldName, $value): array {
            if (!$this->isFieldValueValid($fieldName, $value)) {
                throw new \Exception('Invalid field name or value: ' . $fieldName);
            }

            $tableName = $this->getTableName();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE ' . $fieldName . ' = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$value]);
            $items = [];
            if ($res) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }

        final private function checkFieldList(array $data) {
            $fields = $this->getFields();

            $supportedFieldNames = array_keys($fields);
            $requestedFieldNames = array_keys($data);

            foreach ( $requestedFieldNames as $requestedFieldName ) {
                if (!in_array($requestedFieldName, $supportedFieldNames)) {
                    throw new \Exception('Field ' . $requestedFieldName . ' is not supported!');
                }

                if ( !$fields[$requestedFieldName]->isEditable() ) {
                    throw new \Exception('Field ' . $requestedFieldName . ' is not editable!');
                }

                if ( !$fields[$requestedFieldName]->isValid($data[$requestedFieldName]) ) {
                    throw new \Exception('The value for the field ' . $requestedFieldName . ' is not valid!');
                }
            }
        }
        final public function selectIn(int $id,$secondTableName){
            $tableName = $this->getTableName();
            $sql = 'SELECT * FROM '.$secondTableName.' WHERE '.$secondTableName.'_id IN ( SELECT '
                                   .$secondTableName.'_id FROM '.$tableName.' WHERE '.$tableName.'_id = ?);';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$id]);
            $item = NULL;
            if ($res) {
                $item = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $item;
        }

        final public function selectProfileName($value){
            $sql ='SELECT `name` FROM `profile` WHERE `profile_id`IN ( SELECT profile_id FROM `model` WHERE `model_id` = ?);';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$value]);
            $item = NULL;
            if($res){
                $item = $prep->fetch(\PDO::FETCH_ASSOC);
            }
            return $item;
        }
        final public function selectIdWhereFieldName($filedName,$fieldValue){
            $tableName = $this->getTableName();
            $sql = 'SELECT '.$tableName.'_id FROM '.$tableName.' WHERE '.$filedName.' = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$fieldValue]);
            $item = NULL;
            if($res){
                $item = $prep->fetch(\PDO::FETCH_ASSOC);
            }
            return $item;
        }
        final public function selectTableInnerJoin($fieldValue){
            $tableName= $this->getTableName();
            $sql = 'SELECT cart_model.price_for_model, cart_model.model_id, cart_model.cart_model_id, model.name, cart_model.area FROM cart_model 
                    INNER JOIN model ON cart_model.model_id=model.model_id WHERE cart_id 
                    IN (SELECT cart_id FROM cart WHERE session_number = ?);';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$fieldValue]);
            $item = [];
            if($res){
                $item = $prep->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $item;
        }
        final public function stateUObradi(){
            $sql = 'SELECT * FROM order_cart WHERE state = "u obradi";';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();
            $item =[];
            if($res){
                $item = $prep->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $item;
        }

        final public function selectAllFromOrder($orderId){
            $sql = 'SELECT * FROM order_cart WHERE order_cart_id = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$orderId]);
            $item =[];
            if($res){
                $item = $prep->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $item;
        }
        #UPDATE order_cart SET state = 'odbijena' where `order_cart_id` = 5 

        final public function updateState($vrednost,$orderCartId){
            $sql = 'UPDATE order_cart SET state = ? where `order_cart_id` = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$vrednost,$orderCartId]);
        }

        final public function modelNamePriceForModel($cartId){
            $sql = 'SELECT model.name, cart_model.price_for_model FROM ((cart_model
            INNER JOIN model ON cart_model.model_id=model.model_id)
            INNER JOIN cart ON cart_model.cart_id=cart.cart_id ) 
            WHERE cart.cart_id IN ( SELECT cart_id FROM order_cart WHERE order_cart.cart_id = ?);';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$cartId]);
            $item =[];
            if($res){
                $item = $prep->fetchAll(\PDO::FETCH_ASSOC);
            }
            return $item;
        }

        final public function suma($fieldValue){
            $tableName= $this->getTableName();
            $sql = 'SELECT SUM(price_for_model) AS suma FROM cart_model 
                    INNER JOIN model ON cart_model.model_id=model.model_id WHERE cart_id 
                    IN (SELECT cart_id FROM cart WHERE session_number = ?);';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$fieldValue]);
            $item = NULL;
            if($res){
                $item = $prep->fetch(\PDO::FETCH_ASSOC);
            }
            return $item;
        }

        final public function selectSessionId($secondTableName,$fieldName,$fieldValue){
            $tableName = $this->getTableName();
            $sql = 'SELECT * FROM '.$tableName.' WHERE '.$secondTableName.'_id IN ( SELECT '.$secondTableName.'_id FROM '
                                   .$secondTableName.' WHERE '.$fieldName.' = ?);';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$fieldValue]);
            $item = [];
            if($res){
                $item = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $item;
        }
        final public function selectWithTreeTables($firstTableName,$secondTableName,$fieldName,$value){
            $tableName = $this->getTableName();
            $sql = 'SELECT * FROM '.$firstTableName.' WHERE '.$firstTableName.'_id IN ( SELECT '
                                   .$firstTableName.'_id FROM '
                                   .$tableName.' WHERE '.$secondTableName.'_id IN ( SELECT '
                                   .$secondTableName.'_id FROM '
                                   .$secondTableName.' WHERE '.$fieldName.' = ?));';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$value]);
            $items = [];
            if($res){
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $items;
        }

        final public function innerJoinTwoTables($value){
            $tableName=$this->getTableName();
            $sql = 'SELECT profile.price_per_unit_area FROM profile
            INNER JOIN model ON profile.profile_id = model.profile_id WHERE model_id=?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute([$value]);
            $item = [];
            if($res){
                $item = $prep->fetch(\PDO::FETCH_ASSOC);
            }
            return $item;

        }
        
        final public function add(array $data) {
           //$this->checkFieldList($data);

            $tableName = $this->getTableName();

            $sqlFieldNames = implode(', ', array_keys($data));

            $questionMarks = str_repeat('?,', count($data));
            $questionMarks = substr($questionMarks, 0, -1);

            $sql = "INSERT INTO {$tableName} ({$sqlFieldNames}) VALUES ({$questionMarks});";
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute(array_values($data));
            if (!$res) {
                return false;
            }

            return $this->dbc->getDatabaseConnection()->lastInsertId();
        }

        final public function editById(int $id, array $data) {
            #$this->checkFieldList($data);

            $tableName = $this->getTableName();

            $editList = [];
            $values = [];
            foreach ($data as $fieldName => $value) {
                $editList[] = "{$fieldName} = ?";
                $values[] = $value;
            }
            $editString = implode(', ', $editList);

            $values[] = $id;

            $sql = "UPDATE {$tableName} SET {$editString} WHERE {$tableName}_id = ?;";
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            return $prep->execute($values);
        }

        final public function deleteById(int $id) {
            $tableName = $this->getTableName();
            $sql = 'DELETE FROM ' . $tableName . ' WHERE ' . $tableName . '_id = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            return $prep->execute([$id]);
        }
    }
