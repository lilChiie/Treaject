<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});

Route::prefix('components')->group(function () {
    Route::get('/FooterAdmin', function () {
        return view('components/footeradmin');
    });

    Route::get('/FooterUser', function () {
        return view('components/footeruser');
    });

    // Route::get('/HeaderAdmin', function () {
    //     return view('components/headeradmin');
    // });

    Route::get('/HeaderUser', function () {
        return view('components/headeruser');
    });

});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user/home');
    });

});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/home');
    });

    Route::get('/Novel', function () {
        return view('admin/novel');
    });

});


