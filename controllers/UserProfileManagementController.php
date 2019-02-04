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
            $this->set('profile',$profile);

            $categoryModel = new \App\models\CategoryModel($this->getDatabaseCOnnection());
            $category = $categoryModel->getAll();
            $this->set('categories',$category);

            $manufacturerModel = new \App\models\ManufacturerModel($this->getDatabaseConnection());
            $manufacturer = $manufacturerModel->getAll();
            $this->set('manufacturers',$manufacturer);

            
            if (!$profile) {
                $this->redirect(\Configuration::BASE . 'user/profiles');
            }

            $this->set('profile', $profile);

            return $profileModel;
        }

        public function postEdit($profileId) {
            $profileModel = $this->getEdit($profileId);

            $name = \filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $picture = \filter_input(INPUT_POST,'picture',FILTER_SANITIZE_STRING);
            $pricePerUnitArea = sprintf("%.2f",\filter_input(INPUT_POST,'price_per_unit_area',FILTER_SANITIZE_STRING));
            $category = \filter_input(INPUT_POST,'category_id', FILTER_SANITIZE_NUMBER_INT);
            $manufacturer = \filter_input(INPUT_POST,'manufacturer_id', FILTER_SANITIZE_NUMBER_INT);

            $profileModel = new \App\Models\ProfileModel($this->getDatabaseConnection());
            $string = str_replace(' ','',strtolower($name));
            $string1 = $string.'.jpg';
            
            $uploadStatus = $this->doImageUpload('picture',$string);
            $picture = \Configuration::UPLOAD_DIR.$string1;

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
            
            $categoryModel = new \App\models\CategoryModel($this->getDatabaseCOnnection());
            $category = $categoryModel->getAll();
            $this->set('categories',$category);

            $manufacturerModel = new \App\models\ManufacturerModel($this->getDatabaseConnection());
            $manufacturer = $manufacturerModel->getAll();
            $this->set('manufacturers',$manufacturer);
        }

        public function postAdd() {
            $name = \filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $picture = \filter_input(INPUT_POST,'picture',FILTER_SANITIZE_STRING);
            $pricePerUnitArea = sprintf("%.2d",\filter_input(INPUT_POST,'price_per_unit_area',FILTER_SANITIZE_STRING));
            $category = \filter_input(INPUT_POST,'category_id', FILTER_SANITIZE_NUMBER_INT);
            $manufacturer = \filter_input(INPUT_POST,'manufacturer_id', FILTER_SANITIZE_NUMBER_INT);

            $profileModel = new \App\Models\ProfileModel($this->getDatabaseConnection());
            $string = str_replace(' ','',strtolower($name));
            $string1 = $string.'.jpg';
            
            $uploadStatus = $this->doImageUpload('picture',$string);
            $picture = \Configuration::UPLOAD_DIR.$string1;
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

        public function deleteById(){
            $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
            $profile = $profileModel->getAll();
            $this->set('profiles',$profile);

        }

        public function postDeleteById(){
            
            $profile1 = \filter_input(INPUT_POST,'profile_id', FILTER_SANITIZE_NUMBER_INT);
            $profileModel = new \App\models\ProfileModel($this->getDatabaseConnection());
            $profile = $profileModel->deleteById($profile1);
            $this->redirect(\Configuration::BASE . 'user/profiles');
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
    
