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
            $picture = filter_input(INPUT_POST,'picture',FILTER_SANITIZE_STRING);
            $pricePerUnitArea = filter_input(INPUT_POST,'price_per_unit_area',FILTER_SANITIZE_STRING);
            $category = filter_input(INPUT_POST,'category');
            $manufacturer = filter_input(INPUT_POST,'manufacturer');


            $profileModel->editById($profileId, [
                'name' => $name,
                'picture' => $picture,
                'price_per_unit_area' => $pricePerUnitArea,
                'category_id' => $category,
                'manufacturer_id' => $manufacturer,
                'administrator_id' => $this->getSession()->get('administrator_id')
            ]);

            $this->redirect(\Configuration::BASE . 'user/profiles');
        }

        public function getAdd() {

        }

        public function postAdd() {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $picture = filter_input(INPUT_POST,'picture',FILTER_SANITIZE_STRING);
            $pricePerUnitArea = filter_input(INPUT_POST,'price_per_unit_area',FILTER_SANITIZE_STRING);
            $category = filter_input(INPUT_POST,'category');
            $manufacturer = filter_input(INPUT_POST,'manufacturer');

            $profileModel = new \App\Models\ProfileModel($this->getDatabaseConnection());
            
            $profileId = $profileModel->add([
                'name' => $name,
                'picture' => $picture,
                'price_per_unit_area' => $pricePerUnitArea,
                'category_id' => $category,
                'manufacturer_id' => $manufacturer,
                'administrator_id' => $this->getSession()->get('administrator_id')
            ]);

            if ($profileId) {
                $this->redirect(\Configuration::BASE . 'user/profiles');
            }

            $this->set('message', 'Doslo je do greske: Nije moguce dodati ovu kategoriju!');
        }
    }
