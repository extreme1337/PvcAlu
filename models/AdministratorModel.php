<?php

namespace App\Models;
use App\Core\DatabaseConnection;

class AdministratorModel{
    private $dbc;

        public function __construct(DatabaseConnection &$dbc) {
            $this->dbc = $dbc;
        }

        public function getById(int $id) {
            $sql = 'SELECT * FROM administrator WHERE administrator_id = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute( [ $id ] );

            $item = NULL;
            if ( $res ) {
                $itemObject = $prep->fetch(\PDO::FETCH_OBJ);
                if ($itemObject !== FALSE) {
                    $item = $itemObject;
                }
            }

            return $item;
        }

        public function getByEmail(string $email) {
            $sql = 'SELECT * FROM administrator WHERE email = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute( [ $email ] );

            $item = NULL;
            if ( $res ) {
                $itemObject = $prep->fetch(\PDO::FETCH_OBJ);
                if ($itemObject !== FALSE) {
                    $item = $itemObject;
                }
            }

            return $item;
        }

        public function getAll(): array {
            $sql = 'SELECT * FROM administrator;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
}