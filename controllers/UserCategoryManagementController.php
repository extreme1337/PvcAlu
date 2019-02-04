<?php
    namespace App\Controllers;

    class UserCategoryManagementController extends \App\Core\Role\UserRoleController {
        public function categories() {
            $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
            $categories = $categoryModel->getAll();
            $this->set('categories', $categories);
        }

        public function getEdit($categoryId) {
            $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
            $category = $categoryModel->getById($categoryId);

            if (!$category) {
                $this->redirect(\Configuration::BASE . 'user/categories');
            }

            $this->set('category', $category);

            return $categoryModel;
        }

        public function postEdit($categoryId) {
            $categoryModel = $this->getEdit($categoryId);

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
            
            $string = str_replace(' ','',strtolower($name));
            $string1 = $string.'.jpg';
            
            $uploadStatus = $this->doImageUpload('picture',$string);
            $picture = \Configuration::UPLOAD_DIR.$string1;
            $categoryId = $categoryModel->add([
                'name' => $name,
                'picture' => $picture,
                'description' => $description,
                'administrator_id' => $this->getSession()->get('administrator_id')
            ]);

            if ($categoryId) {
                $this->redirect(\Configuration::BASE . 'user/categories');
            }
            $this->redirect(\Configuration::BASE.'user/profile');
        }

        public function getAdd() {

        }

        public function deleteById(){
            $categoryModel = new \App\models\CategoryModel($this->getDatabaseConnection());
            $category = $categoryModel->getAll();
            $this->set('categories',$category);

        }

        public function postDeleteById(){
            
            $category1 = \filter_input(INPUT_POST,'category_id', FILTER_SANITIZE_NUMBER_INT);
            $categoryModel = new \App\models\CategoryModel($this->getDatabaseConnection());
            $category = $categoryModel->deleteById($category1);
            $this->redirect(\Configuration::BASE . 'user/categories');
        }

        public function postAdd() {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

            $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
            
            $description = filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
            
            
            
            $string = str_replace(' ','',strtolower($name));
            $string1 = $string.'.jpg';
            
            $uploadStatus = $this->doImageUpload('picture',$string);
            $picture = \Configuration::UPLOAD_DIR.$string1;
            $categoryId = $categoryModel->add([
                'name' => $name,
                'picture' => $picture,
                'description' => $description,
                'administrator_id' => $this->getSession()->get('administrator_id')
            ]);

            if ($categoryId) {
                $this->redirect(\Configuration::BASE . 'user/categories');
            }

            $this->set('message', 'Doslo je do greske: Nije moguce dodati ovu kategoriju!');
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
