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
    return view('backend.dashboard');
});

Route::get('/users/roles', function () {
    return view('backend.user-role.index');
});
Route::get('/users', function () {
    return view('backend.user.index');
});
Route::get('/users/create', function () {
    return view('backend.user.create');
});
Route::get('/users/edit', function () {
    return view('backend.user.edit');
});

Route::get('/products', function () {
    return view('backend.product.index');
});
Route::get('/products/create', function () {
    return view('backend.product.create');
});
Route::get('/products/edit', function () {
    return view('backend.product.edit');
});
Route::get('/product/category', function () {
    return view('backend.product-category.index');
});
Route::get('/product/inventory', function () {
    return view('backend.product.inventory');
});
Route::get('/orders', function () {
    return view('backend.order.index');
});

Route::get('/articles', function () {
    return view('backend.article.index');
});
Route::get('/articles/create', function () {
    return view('backend.article.create');
});
Route::get('/articles/edit', function () {
    return view('backend.article.edit');
});
Route::get('/articles/category', function () {
    return view('backend.article-category.index');
});


Route::get('/donate', function () {
    return view('backend.donate.index');
});
Route::get('/donate/create', function () {
    return view('backend.donate.create');
});
Route::get('/donate/edit', function () {
    return view('backend.donate.edit');
});
Route::get('/location', function () {
    return view('backend.location.index');
});
Route::get('/donar', function () {
    return view('backend.donate.donar');
});
