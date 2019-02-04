<?php
    return [
        #App\Core\Route::get(),
        
        \App\core\Route::get('|^category/([0-9]+)/?$|',                 'Category',                     'show'),
        \App\core\Route::get('|^categories/?$|',                        'Category',                     'listAll'),
        \App\core\Route::get('|^category/([0-9]+)/delete/?$|',          'Category',                     'delete'),
        \App\core\Route::get('|^user/login/?$|',                        'Main',                         'getLogin'),
        \App\core\Route::post('|^user/login/?$|',                       'Main',                         'postLogin'),
        \App\core\Route::get('|^user/profile/?$|',                      'UserDashboard',                'index'),
        \App\core\Route::get('|^profile/([0-9]+)/?$|',                  'Profile',                      'show'),
        \App\core\Route::get('|^profile/model/([0-9]+)/?$|',            'Model',                        'show'),
        \App\core\Route::get('|^cart/?$|',                              'Cart',                         'show'),
        \App\core\Route::post('|^cart/?$|',                             'Cart',                        'deleteById'),
        \App\Core\Route::get('|^cart/order/?$|',                        'Cart',                         'orderFromCart'),
        \App\Core\Route::post('|^cart/order/?$|',                       'Cart',                         'postOrderFromCart'),
        \App\core\Route::get('|^model/add/([0-9]+)/?$|',                'Model',                        'addToCart'),
        \App\core\Route::post('|^model/add/([0-9]+)/?$|',               'Model',                        'postAddToCart'),

        App\Core\Route::get('|^user/categories/?$|',                    'UserCategoryManagement',       'categories'),
        App\Core\Route::get('|^user/categories/edit/([0-9]+)/?$|',      'UserCategoryManagement',       'getEdit'),
        App\Core\Route::post('|^user/categories/edit/([0-9]+)/?$|',     'UserCategoryManagement',       'postEdit'),
        App\Core\Route::get('|^user/categories/add/?$|',                'UserCategoryManagement',       'getAdd'),
        App\Core\Route::post('|^user/categories/add/?$|',               'UserCategoryManagement',       'postAdd'),
        App\Core\Route::get('|^user/categories/delete/?$|',             'UserCategoryManagement',       'deleteById'),
        App\Core\Route::post('|^user/categories/delete/?$|',            'UserCategoryManagement',       'postDeleteById'),

        App\Core\Route::get('|^user/manufacturers/?$|',                 'UserManufacturerManagement',   'manufacturers'),
        App\Core\Route::get('|^user/manufacturers/edit/([0-9]+)/?$|',   'UserManufacturerManagement',   'getEdit'),
        App\Core\Route::post('|^user/manufacturers/edit/([0-9]+)/?$|',  'UserManufacturerManagement',   'postEdit'),
        App\Core\Route::get('|^user/manufacturers/add/?$|',             'UserManufacturerManagement',   'getAdd'),
        App\Core\Route::post('|^user/manufacturers/add/?$|',            'UserManufacturerManagement',   'postAdd'),
        App\Core\Route::get('|^user/manufacturers/delete/?$|',          'UserManufacturerManagement',   'deleteById'),
        App\Core\Route::post('|^user/manufacturers/delete/?$|',         'UserManufacturerManagement',   'postDeleteById'),

        App\Core\Route::get('|^user/models/?$|',                        'UserModelManagement',          'models'),
        App\Core\Route::get('|^user/models/edit/([0-9]+)/?$|',          'UserModelManagement',          'getEdit'),
        App\Core\Route::post('|^user/models/edit/([0-9]+)/?$|',         'UserModelManagement',          'postEdit'),
        App\Core\Route::get('|^user/models/add/?$|',                    'UserModelManagement',          'getAdd'),
        App\Core\Route::post('|^user/models/add/?$|',                   'UserModelManagement',          'postAdd'),
        App\Core\Route::get('|^user/models/delete/?$|',                 'UserModelManagement',          'deleteById'),
        App\Core\Route::post('|^user/models/delete/?$|',                'UserModelManagement',          'postDeleteById'),


        App\Core\Route::get('|^user/profiles/?$|',                      'UserProfileManagement',        'profiles'),
        App\Core\Route::get('|^user/profiles/edit/([0-9]+)/?$|',        'UserProfileManagement',        'getEdit'),
        App\Core\Route::post('|^user/profiles/edit/([0-9]+)/?$|',       'UserProfileManagement',        'postEdit'),
        App\Core\Route::get('|^user/profiles/add/?$|',                  'UserProfileManagement',        'getAdd'),
        App\Core\Route::post('|^user/profiles/add/?$|',                 'UserProfileManagement',        'postAdd'),
        App\Core\Route::get('|^user/profiles/delete/?$|',               'UserProfileManagement',        'deleteById'),
        App\Core\Route::post('|^user/profiles/delete/?$|',              'UserProfileManagement',        'postDeleteById'),

        \App\core\Route::get('|^user/orders/?$|',                       'UserOrderCartManagement',      'index'),
        \App\core\Route::post('|^user/orders/?$|',                      'UserOrderCartManagement',      'postIndex'),
        \App\core\Route::get('|^user/orders/edit/([0-9]+)/?$|',         'UserOrderCartManagement',      'odobravanje'),
        \App\core\Route::post('|^user/orders/edit/([0-9]+)/?$|',        'UserOrderCartManagement',      'postOdobravanje'),

        




        \App\core\Route::any('|^.*$|',                           'Main',                    'home')
    ];