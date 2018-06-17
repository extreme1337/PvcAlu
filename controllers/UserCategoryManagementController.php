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
            $picture = filter_input(INPUT_POST,'picture',FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
            

            $categoryModel->editById($categoryId, [
                'name' => $name,
                'picture' => $picture,
                'description' => $description,
                'administrator_id' => $this->getSession()->get('administrator_id')
            ]);

            $this->redirect(\Configuration::BASE . 'user/categories');
        }

        public function getAdd() {

        }

        public function deleteById(){}

        public function postAdd() {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

            $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
            $picture = filter_input(INPUT_POST,'picture',FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
            
            
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
    }
