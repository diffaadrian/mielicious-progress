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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Dashboard
// Route::get('/', "HomeController@index")->name('home');

Route::get('/', 'Core\DashboardController@index')->name('home');

// Produk
Route::get('/product', 'Core\ProductController@index')->name('product.index');
Route::get('/product/create', 'Core\ProductController@create')->name('product.create');
Route::post('/product/store', 'Core\ProductController@store')->name('product.store');
Route::get('/product/edit/{id}', 'Core\ProductController@edit')->name('product.edit');
Route::patch('/product/update/{id}', 'Core\ProductController@update')->name('product.update');
Route::get('/product/delete/{id}', 'Core\ProductController@delete')->name('product.delete');

// Material
Route::get('/material', 'Core\MaterialController@index')->name('material.index');
Route::get('/material/create', 'Core\MaterialController@create')->name('material.create');
Route::post('/material/store', 'Core\MaterialController@store')->name('material.store');
Route::get('/material/edit/{id}', 'Core\MaterialController@edit')->name('material.edit');
Route::patch('/material/update/{id}', 'Core\MaterialController@update')->name('material.update');
Route::get('/material/delete/{id}', 'Core\MaterialController@delete')->name('material.delete');

// Produksi
Route::get('/production', 'Core\ProductionController@index')->name('production.index');
Route::get('/production/create', 'Core\ProductionController@create')->name('production.create');
Route::post('/production/store', 'Core\ProductionController@store')->name('production.store');
Route::get('/production/edit/{id}', 'Core\ProductionController@edit')->name('production.edit');
Route::patch('/production/update/{id}', 'Core\ProductionController@update')->name('production.update');
Route::get('/production/delete/{id}', 'Core\ProductionController@delete')->name('production.delete');

// BoM
Route::get('/bom', 'Core\BomController@index')->name('bom.index');
Route::get('/bom/create', 'Core\BomController@create')->name('bom.create');
Route::post('/bom/store', 'Core\BomController@store')->name('bom.store');
Route::get('/bom/edit/{id}', 'Core\BomController@edit')->name('bom.edit');
Route::patch('/bom/update/{id}', 'Core\BomController@update')->name('bom.update');
Route::get('/bom/delete/{id}', 'Core\BomController@delete')->name('bom.delete');

// Vendor
Route::get('/vendor', 'Core\VendorController@index')->name('vendor.index');
Route::get('/vendor/create', 'Core\VendorController@create')->name('vendor.create');
Route::post('/vendor/store', 'Core\VendorController@store')->name('vendor.store');
Route::get('/vendor/edit/{id}', 'Core\VendorController@edit')->name('vendor.edit');
Route::patch('/vendor/update/{id}', 'Core\VendorController@update')->name('vendor.update');
Route::get('/vendor/delete/{id}', 'Core\VendorController@delete')->name('vendor.delete');