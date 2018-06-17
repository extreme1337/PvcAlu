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
            $profile = new  \App\models\ProfileModel($this->getDatabaseConnection());
            $profileName = $profile->selectProfileName($modelId);
            $profileNameLower = strtolower($profileName['name']);
            $profileWithoutBlank = str_replace(' ','',$profileNameLower);
            $string = $profileWithoutBlank.'_slika_'.$modelId.'.jpg';
            $uploadStatus = $this->doImageUpload('picture',$string);
            if(!$uploadStatus){
                $this->set('message','Model je dodat, ali nije dodata njegova slika');
                return;
            }
            
            $uploadStatus = $this->doImageUpload('picture','models/');
            $profile = new  \App\models\ProfileModel($this->getDatabaseConnection());
            $profileName = $profile->selectProfileName($modelI);
            print_r($profileName);
            exit;

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $max_width = filter_input(INPUT_POST, 'max_width', FILTER_SANITIZE_STRING);
            $min_width = filter_input(INPUT_POST, 'min_width', FILTER_SANITIZE_STRING);
            $min_height = filter_input(INPUT_POST, 'min_height', FILTER_SANITIZE_STRING);
            $max_height = filter_input(INPUT_POST, 'max_height', FILTER_SANITIZE_STRING);
            $picture = filter_input(INPUT_POST, 'picture', FILTER_SANITIZE_STRING);
            $profile = filter_input(INPUT_POST, 'profile');

            $modelModel->editById($modelId, [
                'administrator_id' => $this->getSession()->get('administrator_id'),
                'name' => $name,
                'min_width' => $min_width,
                'max_width' => $max_width,
                'min_height' => $min_height,
                'max_height' => $max_height,
                'picture' => $picture,
                'profile_id' => $profile
            ]);

            $this->redirect(\Configuration::BASE . 'user/models');

        }

        public function getAdd() {

        }

        public function postAdd() {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $max_width = filter_input(INPUT_POST, 'max_width', FILTER_SANITIZE_STRING);
            $min_width = filter_input(INPUT_POST, 'min_width', FILTER_SANITIZE_STRING);
            $min_height = filter_input(INPUT_POST, 'min_height', FILTER_SANITIZE_STRING);
            $max_height = filter_input(INPUT_POST, 'max_height', FILTER_SANITIZE_STRING);
            $picture = filter_input(INPUT_POST, 'picture', FILTER_SANITIZE_STRING);
            $profile = filter_input(INPUT_POST, 'profile');

            $modelModel = new \App\Models\ModelModel($this->getDatabaseConnection());
            
            $manufacturId = $modelModel->add([
                'administrator_id' => $this->getSession()->get('administrator_id'),
                'name' => $name,
                'min_width' => $min_width,
                'max_width' => $max_width,
                'min_height' => $min_height,
                'max_height' => $max_height,
                #'picture' => $picture,
                'profile_id' => $profile
            ]);

            if (!$modelId) {
                $this->redirect(\Configuration::BASE . 'user/models');
            }

            $this->set('message', 'Doslo je do greske: Nije moguce dodati ovog proizvodjaca!');
        }

        private function doImageUpload(string $fieldName, string $fileName) : bool{
            $uploadPath = new \Upload\Storage\FileSystem(\Configuration::UPLOAD_DIR);
            $file = new \Upload\File($fieldName,$uploadPath);
            $file->setName($fileName);
            $file->addValidations([
                new \Upload\Validation\Mimetype("image/jpeg"),
                new \Upload\Validation\Size("3M")
            ]);

            try{
                $file-upload();
                return true;
            }catch(Exception $e){
                $this->set('message', 'Greska '. implode($file->getErrors()));
                return false;
            }
        }
    }
