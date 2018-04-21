<?php

namespace App\models;
use App\Core\DatabaseConnection;

class ProfileModel{
    private $dbc;

        public function __construct(DatabaseConnection &$dbc) {
            $this->dbc = $dbc;
        }

        public function getById(int $id) {
            $sql = 'SELECT * FROM profile WHERE profile_id = ?;';
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
            $sql = 'SELECT * FROM profile WHERE name = ?;';
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
            $sql = 'SELECT * FROM profile WHERE administrator_id = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute( [ $id ] );

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
        public function getByCategoryId(int $id) {
            $sql = 'SELECT * FROM profile WHERE category_id = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute( [ $id ] );

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
        public function getByManufacturerId(int $id) {
            $sql = 'SELECT * FROM profile WHERE manufacturer_id = ?;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute( [ $id ] );

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
        
        public function getByPriceAscending(): array{
            $sql = 'SELECT * FROM profile ORDER BY price_per_unit_area ASC;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }

        public function getByPriceDesce(): array{
            $sql = 'SELECT * FROM profile ORDER BY price_per_unit_area DESC;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }

        public function getAll(): array {
            $sql = 'SELECT * FROM profile;';
            $prep = $this->dbc->getDatabaseConnection()->prepare($sql);
            $res = $prep->execute();

            $items = [];
            if ( $res ) {
                $items = $prep->fetchAll(\PDO::FETCH_OBJ);
            }

            return $items;
        }
}