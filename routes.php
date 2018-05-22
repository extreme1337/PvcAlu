<?php
    return [
        #App\Core\Route::get(),
        
        \App\Core\Route::get('|^category/([0-9]+)/?$|',          'Category', 'show'),
        \App\Core\Route::get('|^categories/?$|',                 'Category', 'listAll'),
        \App\Core\Route::get('|^category/([0-9]+)/delete/?$|',   'Category', 'delete'),
        \App\Core\Route::get('|^profile/([0-9]+)/?$|',           'Profile',  'show'),
        \App\Core\Route::get('|^profile/model/([0-9]+)/?$|',     'Model',    'show'),
        App\Core\Route::any('|^.*$|',                            'Main',     'home')
    ];