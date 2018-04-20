<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ManufacturerModel{
    private $dbc;

        public function __construct(DatabaseConnection &$dbc) {
            $this->dbc = $dbc;
        }

        public function getById(int $id) {
            $sql = 'SELECT * FROM manufacturer WHERE manufacturer_id = ?;';
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
        public function getByAdminId(int $id) {
            $sql = 'SELECT * FROM manufacturer WHERE administrator_id = ?;';
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

        public function getByName(string $name) {
            $sql = 'SELECT * FROM manufacturer WHERE name = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute( [ $name ] );

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
            $sql = 'SELECT * FROM category;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
}