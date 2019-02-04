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
            $this->set('manufacturer',$manufacturer);

            if (!$manufacturer) {
                $this->redirect(\Configuration::BASE . 'user/manufacturers');
            }

            $this->set('manufactur', $manufacturer);

            return $manufacturModel;
        }

        public function postEdit($manufacturerId) {
            $manufacturerModel = $this->getEdit($manufacturerId);

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            

            $manufacturerModel->editById($manufacturerId, [
                'administrator_id' =>$this->getSession()->get('administrator_id'),
                'name' => $name
            ]);

            $this->redirect(\Configuration::BASE . 'user/manufacturers');
        }

        public function getAdd() {

        }

        public function deleteById(){
            $manufacturerModel = new \App\models\ManufacturerModel($this->getDatabaseConnection());
            $manufacturer = $manufacturerModel->getAll();
            $this->set('manufacturers',$manufacturer);

        }

        public function postDeleteById(){
            
            $manufacturer1 = \filter_input(INPUT_POST,'manufacturer_id', FILTER_SANITIZE_NUMBER_INT);
            $manufacturerModel = new \App\models\ManufacturerModel($this->getDatabaseConnection());
            $manufacturer = $manufacturerModel->deleteById($manufacturer1);
            $this->redirect(\Configuration::BASE . 'user/manufacturers');
        }

        public function postAdd() {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            

            $manufacturerModel = new \App\Models\ManufacturerModel($this->getDatabaseConnection());
            
            $manufacturId = $manufacturerModel->add([
                'administrator_id' => $this->getSession()->get('administrator_id'),
                'name' => $name
            ]);

            if (!$manufacturerId) {
                $this->redirect(\Configuration::BASE . 'user/manufacturers');
            }

            $this->set('message', 'Doslo je do greske: Nije moguce dodati ovog proizvodjaca!');
        }
    }
