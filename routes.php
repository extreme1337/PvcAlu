<?php
    return [
        #App\Core\Route::get(),
        
        \App\core\Route::get('|^category/([0-9]+)/?$|',          'Category',                'show'),
        \App\core\Route::get('|^categories/?$|',                 'Category',                'listAll'),
        \App\core\Route::get('|^category/([0-9]+)/delete/?$|',   'Category',                'delete'),
        \App\core\Route::get('|^user/login/?$|',                 'Main',                    'getLogin'),
        \App\core\Route::post('|^user/login/?$|',                'Main',                    'postLogin'),
        \App\core\Route::get('|^user/profile/?$|',               'UserDashboard',           'index'),
        \App\core\Route::get('|^profile/([0-9]+)/?$|',           'Profile',                 'show'),
        \App\core\Route::get('|^profile/model/([0-9]+)/?$|',     'Model',                   'show'),
        \App\core\Route::get('|^cart/?$|',                       'Cart',                    'show'),

        App\Core\Route::get('|^user/categories/?$|',                'UserCategoryManagement', 'categories'),
        App\Core\Route::get('|^user/categories/edit/([0-9]+)/?$|',  'UserCategoryManagement', 'getEdit'),
        App\Core\Route::post('|^user/categories/edit/([0-9]+)/?$|', 'UserCategoryManagement', 'postEdit'),
        App\Core\Route::get('|^user/categories/add/?$|',            'UserCategoryManagement', 'getAdd'),
        App\Core\Route::post('|^user/categories/add/?$|',           'UserCategoryManagement', 'postAdd'),

        App\Core\Route::get('|^user/manufacturers/?$|',                'UserManufacturerManagement', 'manufacturers'),
        App\Core\Route::get('|^user/manufacturers/edit/([0-9]+)/?$|',  'UserManufacturerManagement', 'getEdit'),
        App\Core\Route::post('|^user/manufacturers/edit/([0-9]+)/?$|', 'UserManufacturerManagement', 'postEdit'),
        App\Core\Route::get('|^user/manufacturers/add/?$|',            'UserManufacturerManagement', 'getAdd'),
        App\Core\Route::post('|^user/manufacturers/add/?$|',           'UserManufacturerManagement', 'postAdd'),

        App\Core\Route::get('|^user/models/?$|',                'UserModelManagement', 'models'),
        App\Core\Route::get('|^user/models/edit/([0-9]+)/?$|',  'UserModelManagement', 'getEdit'),
        App\Core\Route::post('|^user/models/edit/([0-9]+)/?$|', 'UserModelManagement', 'postEdit'),
        App\Core\Route::get('|^user/models/add/?$|',            'UserModelManagement', 'getAdd'),
        App\Core\Route::post('|^user/models/add/?$|',           'UserModelManagement', 'postAdd'),


        App\Core\Route::get('|^user/profiles/?$|',                'UserProfileManagement', 'profiles'),
        App\Core\Route::get('|^user/profiles/edit/([0-9]+)/?$|',  'UserProfileManagement', 'getEdit'),
        App\Core\Route::post('|^user/profiles/edit/([0-9]+)/?$|', 'UserProfileManagement', 'postEdit'),
        App\Core\Route::get('|^user/profiles/add/?$|',            'UserProfileManagement', 'getAdd'),
        App\Core\Route::post('|^user/profiles/add/?$|',           'UserProfileManagement', 'postAdd'),




        \App\core\Route::any('|^.*$|',                           'Main',                    'home')
    ];