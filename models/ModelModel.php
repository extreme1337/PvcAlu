<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ModelModel{
    private $dbc;

        public function __construct(DatabaseConnection &$dbc) {
            $this->dbc = $dbc;
        }

        public function getById(int $id) {
            $sql = 'SELECT * FROM model WHERE model_id = ?;';
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
            $sql = 'SELECT * FROM model WHERE name = ?;';
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
        public function getByAdministratorId(int $id) {
            $sql = 'SELECT * FROM model WHERE administrator_id = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute( [ $id ] );

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
        public function getByProfileId(int $id) {
            $sql = 'SELECT * FROM model WHERE profile_id = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute( [ $id ] );

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
        
        public function getAll(): array {
            $sql = 'SELECT * FROM model;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
}