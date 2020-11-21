<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {
    return view('admin.dashboard');
});

Route::get('/manage-order', function() {
    return view('admin.manageorder');
});

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function() {
    return view('auth.register');
})->name('register');

Route::get('/drink/create', function() {
    return view('drink.create');
});

Route::get('/drink/edit', function() {
    return view('drink.edit');
});

Route::get('/ingredient/create', function() {
    return view('ingredient.create');
});

Route::get('/ingredient/edit', function() {
    return view('ingredient.edit');
});

Route::get('/order/create', function() {
    return view('order.create');
});

Route::get('/pizza/create', function() {
    return view('pizza.create');
});

Route::get('/pizza/edit', function() {
    return view('pizza.edit');
});

Route::get('/pizza_ingredient/id/create', function() {
    return view('pizza_ingredient.create');
});

Route::get('/price/create', function() {
    return view('price.create');
});

Route::get('/price/edit', function() {
    return view('price.edit');
});

Route::get('/size/create', function() {
    return view('size.create');
});

Route::get('/size/edit', function() {
    return view('size.edit');
});

Route::get('/unit/create', function() {
    return view('unit.create');
});

Route::get('/unit/edit', function() {
    return view('unit.edit');
});

Route::get('/user/create', function() {
    return view('user.create');
});

Route::get('/user/edit', function() {
    return view('user.edit');
});