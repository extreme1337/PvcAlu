<?php
    namespace App\Controllers;

    class UserModelManagementController extends \App\Core\Role\UserRoleController {
        public function models() {
            $modelModel = new \App\Models\ModelModel($this->getDatabaseConnection());
            $models = $modelModel->getAll();
            $this->set('models', $models);
        }

        public function getEdit($modelId) {
            $modelModel = new \App\Models\ModelModel($this->getDatabaseConnection());
            $model = $modelModel->getById($modelId);

            if (!$model) {
                $this->redirect(\Configuration::BASE . 'user/models');
            }

            $this->set('manufactur', $model);

            return $modelModel;
        }

        public function postEdit($modelId) {
            $modelModel = $this->getEdit($modelId);

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $adminId = 1;

            $modelModel->editById($modelId, [
                'administrator_id' => $adminId,
                'name' => $name
            ]);

            $this->redirect(\Configuration::BASE . 'user/models');
        }

        public function getAdd() {

        }

        public function postAdd() {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $adminId = 1;

            $modelModel = new \App\Models\ModelModel($this->getDatabaseConnection());
            
            $manufacturId = $modelModel->add([
                'administrator_id' => $adminId,
                'name' => $name
            ]);

            if (!$modelId) {
                $this->redirect(\Configuration::BASE . 'user/models');
            }

            $this->set('message', 'Doslo je do greske: Nije moguce dodati ovog proizvodjaca!');
        }
    }
