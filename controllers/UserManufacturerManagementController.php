<?php
    namespace App\Controllers;

    class UserManufacturerManagementController extends \App\Core\Role\UserRoleController {
        public function manufacturers() {
            $manufacturModel = new \App\Models\ManufacturerModel($this->getDatabaseConnection());
            $manufacturers = $manufacturModel->getAll();
            $this->set('manufacturers', $manufacturers);
        }

        public function getEdit($manufacturId) {
            $manufacturModel = new \App\Models\ManufacturerModel($this->getDatabaseConnection());
            $manufacturer = $manufacturModel->getById($manufacturId);

            if (!$manufacturer) {
                $this->redirect(\Configuration::BASE . 'user/manufacturers');
            }

            $this->set('manufactur', $manufacturer);

            return $manufacturModel;
        }

        public function postEdit($manufacturerId) {
            $manufacturerModel = $this->getEdit($manufacturerId);

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $adminId = 1;

            $manufacturerModel->editById($manufacturerId, [
                'administrator_id' => $adminId,
                'name' => $name
            ]);

            $this->redirect(\Configuration::BASE . 'user/manufacturers');
        }

        public function getAdd() {

        }

        public function postAdd() {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $adminId = 1;

            $manufacturerModel = new \App\Models\ManufacturerModel($this->getDatabaseConnection());
            
            $manufacturId = $manufacturerModel->add([
                'administrator_id' => $adminId,
                'name' => $name
            ]);

            if (!$manufacturerId) {
                $this->redirect(\Configuration::BASE . 'user/manufacturers');
            }

            $this->set('message', 'Doslo je do greske: Nije moguce dodati ovog proizvodjaca!');
        }
    }
