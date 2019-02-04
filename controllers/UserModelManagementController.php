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
            $this->set('model',$model);
            $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
            $profile = $profileModel->getAll();
            $this->set('profiles',$profile);

            if (!$model) {
                $this->redirect(\Configuration::BASE . 'user/models');
            }

            $this->set('manufactur', $model);

            return $modelModel;
        }

        public function postEdit($modelId) {
            $modelModel = $this->getEdit($modelId);

            $name = \filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $max_width = sprintf("%.2f",\filter_input(INPUT_POST, 'max_width', FILTER_SANITIZE_STRING));
            $min_width = sprintf("%.2f",\filter_input(INPUT_POST, 'min_width', FILTER_SANITIZE_STRING));
            $min_height = sprintf("%.2f",\filter_input(INPUT_POST, 'min_height', FILTER_SANITIZE_STRING));
            $max_height = sprintf("%.2f",\filter_input(INPUT_POST, 'max_height', FILTER_SANITIZE_STRING));
            $profile = \filter_input(INPUT_POST, 'profile_id', FILTER_SANITIZE_NUMBER_INT);
            $string = str_replace(' ','',strtolower($name));
            $string1 = $string.'.jpg';
            
            $uploadStatus = $this->doImageUpload('picture',$string);
            $picture = \Configuration::UPLOAD_DIR.$string1;
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
            
            $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
            $profile = $profileModel->getAll();
            $this->set('profiles',$profile);
        }

        public function postAdd() {
            $name = \filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $max_width = sprintf("%.2f",filter_input(INPUT_POST, 'max_width', FILTER_SANITIZE_STRING));
            $min_width = sprintf("%.2f",\filter_input(INPUT_POST, 'min_width', FILTER_SANITIZE_STRING));
            $min_height = sprintf("%.2f",\filter_input(INPUT_POST, 'min_height', FILTER_SANITIZE_STRING));
            $max_height = sprintf("%.2f",\filter_input(INPUT_POST, 'max_height', FILTER_SANITIZE_STRING));
            $profile = \filter_input(INPUT_POST, 'profile_id', FILTER_SANITIZE_NUMBER_INT);
            
            $modelModel = new \App\Models\ModelModel($this->getDatabaseConnection());
            $string = str_replace(' ','',strtolower($name));
            $string1 = $string.'.jpg';
            
            $uploadStatus = $this->doImageUpload('picture',$string);
            $picture = \Configuration::UPLOAD_DIR.$string1;
            $manufacturId = $modelModel->add([
                'administrator_id' => $this->getSession()->get('administrator_id'),
                'name' => $name,
                'min_width' => $min_width,
                'max_width' => $max_width,
                'min_height' => $min_height,
                'max_height' => $max_height,
                'picture' => $picture,
                'profile_id' => $profile
            ]);

            if (!$modelId) {
                $this->redirect(\Configuration::BASE . 'user/models');
            }

            $this->set('message', 'Doslo je do greske: Nije moguce dodati ovog proizvodjaca!');
        }
        public function deleteById(){
            $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
            $model = $modelModel->getAll();
            $this->set('models',$model);

        }

        public function postDeleteById(){
            
            $model1 = \filter_input(INPUT_POST,'model_id', FILTER_SANITIZE_NUMBER_INT);
            $modelModel = new \App\models\ModelModel($this->getDatabaseConnection());
            $model = $modelModel->deleteById($model1);
            $this->redirect(\Configuration::BASE . 'user/models');
        }

        private function doImageUpload(string $fieldName, string $fileName) : bool{
            unlink(\Configuration::UPLOAD_DIR.$fileName.'.jpg');
            $uploadPath = new \Upload\Storage\FileSystem(\Configuration::UPLOAD_DIR);
            $file = new \Upload\File($fieldName, $uploadPath);
            $file->setName($fileName);
            $file->addValidations([
                new \Upload\Validation\Mimetype("image/jpeg")
            ]);

            try{
                $file->upload();
                return true;
            }catch(Exception $e){
                $this->set('message', 'Greska '.\implode(', ',$file->getErrors()));
                return false;
            }
        }
    }
