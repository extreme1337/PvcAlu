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




        \App\core\Route::any('|^.*$|',                           'Main',                    'home')
    ];