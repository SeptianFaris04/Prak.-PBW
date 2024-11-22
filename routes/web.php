<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view ('home'));
Route::get('/about', fn () => view ('about'));
Route::get('/contact', fn () => view ('contact'));
Route::get('/gallery', fn () => view ('gallery'));

Route::get ('users', function () {
 $users = [
    ['id' => 1, 'name' => 'Intan' ],
    ['id' => 2, 'name' => 'Nia' ],
 ];

 return$users;
});