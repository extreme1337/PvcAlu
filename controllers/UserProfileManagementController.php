<?php
    namespace App\Controllers;

    class UserProfileManagementController extends \App\Core\Role\UserRoleController {
        public function profiles() {
            $profileModel = new \App\Models\ProfileModel($this->getDatabaseConnection());
            $profiles = $profileModel->getAll();
            $this->set('profiles', $profiles);
        }

        public function getEdit($profileId) {
            $profileModel = new \App\Models\ProfileModel($this->getDatabaseConnection());
            $profile = $profileModel->getById($profileId);

            if (!$profile) {
                $this->redirect(\Configuration::BASE . 'user/profiles');
            }

            $this->set('profile', $profile);

            return $profileModel;
        }

        public function postEdit($profileId) {
            $profileModel = $this->getEdit($profileId);

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

            $profileModel->editById($profileId, [
                'name' => $name
            ]);

            $this->redirect(\Configuration::BASE . 'user/profiles');
        }

        public function getAdd() {

        }

        public function postAdd() {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

            $profileModel = new \App\Models\ProfileModel($this->getDatabaseConnection());
            
            $profileId = $profileModel->add([
                'name' => $name
            ]);

            if ($profileId) {
                $this->redirect(\Configuration::BASE . 'user/profiles');
            }

            $this->set('message', 'Doslo je do greske: Nije moguce dodati ovu kategoriju!');
        }
    }
