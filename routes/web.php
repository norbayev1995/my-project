<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('city/{name}', function ($name) {
    echo "Welcome to ".$name." !";
});
Route::prefix('admin')->group(function () {
    Route::get('users/{id}', function ($id) {
        echo "This is user with id ".$id." !";
    })->name('admin.users.show');
});

Route::prefix('profile')->group(function () {
    Route::get('view/', function () {
        echo "This is profile view!";
    })->name('profile.view');
    Route::get('edit/', function () {
        echo "This is edit profile!";
    })->name('profile.edit');
    Route::get('settings/', function () {
        echo "This is profile settings!";
    })->name('profile.settings');
});
Route::prefix('products')->group(function () {
    Route::get('products/', function () {
        echo "This is products view!";
    });
    Route::get('products/{id}', function ($id) {
        echo "This is products id" . $id . " !";
    });
    Route::get('product/{id}/edit', function ($id) {
        echo "This is product id" . $id . " edit !";
    })->name('products.edit');
});
Route::get('old-url', function () {
    return redirect()->route('new-url');
});
Route::get('/new-url', function () {
    echo "This is new url!";
})->name('new-url');
