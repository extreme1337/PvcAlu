<?php

namespace App\models;
use App\Core\DatabaseConnection;

class CartModel{
    private $dbc;

        public function __construct(DatabaseConnection &$dbc) {
            $this->dbc = $dbc;
        }

        public function getById(int $id) {
            $sql = 'SELECT * FROM cart WHERE cart_id = ?;';
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

        public function getBySessinNumber(string $sessionNumber) {
            $sql = 'SELECT * FROM cart WHERE session_number = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute( [ $sessionNumber ] );

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
            $sql = 'SELECT * FROM cart;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
}