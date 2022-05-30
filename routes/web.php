<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SecretController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;

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
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
Route::get('dashboard',[DashController::class,'index'])->name('dash');

Route::get('/',[WelcomeController::class,'index'])->name('index');


Route::get('users/create',[UserController::class,'create'])->name('users.create');
Route::post('users/store',[UserController::class,'store'])->name('users.store');
Route::get('users/index',[UserController::class,'index'])->name('users.index');
Route::get('users/edit/{id}',[UserController::class,'edit'])->name('users.edit');
Route::post('users/update/{id}',[UserController::class,'update'])->name('users.update');
Route::get('users/delete/{id}',[UserController::class,'delete'])->name('users.delete');



Route::get('products/create',[ProductController::class,'create'])->name('products.create');
Route::post('products/store',[ProductController::class,'store'])->name('products.store');
Route::get('products/index',[ProductController::class,'index'])->name('products.index');
Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::post('products/update/{id}',[productController::class,'update'])->name('products.update');
Route::get('products/delete/{id}',[productController::class,'delete'])->name('products.delete');



Route::get('roles/create',[RoleController::class,'create'])->name('roles.create');
Route::post('roles/store',[RoleController::class,'store'])->name('roles.store');
Route::get('roles/index',[RoleController::class,'index'])->name('roles.index');
Route::get('roles/edit/{id}',[RoleController::class,'edit'])->name('roles.edit');
Route::post('roles/update/{id}',[RoleController::class,'update'])->name('roles.update');
Route::get('roles/delete/{id}',[RoleController::class,'delete'])->name('roles.delete');


Route::get('secrets/create',[secretController::class,'create'])->name('secrets.create');
Route::post('secrets/store',[SecretController::class,'store'])->name('secrets.store');
Route::get('secrets/index',[SecretController::class,'index'])->name('secrets.index');
Route::get('secrets/edit/{id}',[SecretController::class,'edit'])->name('secrets.edit');
Route::post('secrets/update/{id}',[SecretController::class,'update'])->name('secrets.update');
Route::get('secrets/delete/{id}',[SecretController::class,'delete'])->name('secrets.delete');



Route::get('orders/create',[OrderController::class,'create'])->name('orders.create');
Route::post('orders/store',[OrderController::class,'store'])->name('orders.store');
Route::get('orders/index',[OrderController::class,'index'])->name('orders.index');
Route::get('orders/edit/{id}',[OrderController::class,'edit'])->name('orders.edit');
Route::post('orders/update/{id}',[OrderController::class,'update'])->name('orders.update');
Route::get('orders/delete/{id}',[OrderController::class,'delete'])->name('orders.delete');




Route::get('transactions/create',[transactionController::class,'create'])->name('transactions.create');
Route::post('transactions/store',[transactionController::class,'store'])->name('transactions.store');
Route::get('transactions/index',[transactionController::class,'index'])->name('transactions.index');
Route::get('transactions/edit/{id}',[transactionController::class,'edit'])->name('transactions.edit');
Route::post('transactions/update/{id}',[transactionController::class,'update'])->name('transactions.update');
Route::get('transactions/delete/{id}',[transactionController::class,'delete'])->name('transactions.delete');

// Route::view('/dashboard','dash')->name('dash');

Route::get('dependent-dropdown', [DropdownController::class, 'index']);
Route::post('api/fetch-states', [DropdownController::class, 'fetchState']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);




Route::get('categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('categories/store',[CategoryController::class,'store'])->name('categories.store');
Route::get('categories/index',[CategoryController::class,'index'])->name('categories.index');
Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::post('categories/update/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::get('categories/delete/{id}',[CategoryController::class,'delete'])->name('categories.delete');



Route::get('posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('posts/store',[PostController::class,'store'])->name('posts.store');
Route::get('posts/index',[PostController::class,'index'])->name('posts.index');
Route::get('posts/edit/{id}',[PostController::class,'edit'])->name('posts.edit');
Route::post('posts/update/{id}',[PostController::class,'update'])->name('posts.update');
Route::get('posts/delete/{id}',[PostController::class,'delete'])->name('posts.delete');
Route::get('show/{id}',[PostController::class,'show'])->name('posts.show');

