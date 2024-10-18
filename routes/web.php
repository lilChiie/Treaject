<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home');
});

Route::prefix('components')->group(function () {
    // Route::get('/FooterAdmin', function () {
    //     return view('components/footeradmin');
    // });

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
    })->name('user.home');

    Route::get('/GenreKomikUser', function () {
        return view('user/genrekomikuser');
    });

    Route::get('/GenreNovelUser', function () {
        return view('user/genrenoveluser');
    });

    Route::get('/DetailKomik', function () {
        return view('user/detailkomik');
    });
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/home');
    });

    Route::get('/DaftarNovel', function () {
        return view('admin/daftarnovel');
    });

    Route::get('/DetailNovel', function () {
        return view('admin/detailnovel');
    });

    Route::get('/GenreNovel', function () {
        return view('admin/genrenovel');
    });

    Route::get('/EditGenreNovel', function () {
        return view('admin/editgenrenovel');
    });

    Route::get('/ChapterNovel', function () {
        return view('admin/chapternovel');
    });

    Route::get('/DaftarKomik', function () {
        return view('admin/daftarkomik');
    });

    Route::get('/DetailKomik', function () {
        return view('admin/detailkomik');
    });

    Route::get('/GenreKomik', function () {
        return view('admin/genrekomik');
    });

    Route::get('/EditGenreKomik', function () {
        return view('admin/editgenrekomik');
    });

    Route::get('/ChapterKomik', function () {
        return view('admin/chapterkomik');
    });
});
