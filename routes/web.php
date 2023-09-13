<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;
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

/*Route::get('/', function () {
    return view('/web/pages/index');
});*/

/*Route::get('/about-us', function () {
    return view('/web/pages/about-us');
});*/



Route::get('/', [WebController::class, 'index']);
Route::get('/about-us', [WebController::class, 'aboutus'])->name('about-us');
Route::get('/clients', [WebController::class, 'clients']);
Route::get('/export', [WebController::class, 'export']);
Route::get('/production', [WebController::class, 'production']);
Route::get('/contact-us', [WebController::class, 'contactus']);

Route::get('/privacy-policy', [WebController::class, 'privacypolicy']);
Route::get('/terms-and-condition', [WebController::class, 'termsandcondition']);
Route::get('/shipping-and-return', [WebController::class, 'shippingandreturn']);
Route::get('/category', [WebController::class, 'category']);
Route::get('{slug}', [WebController::class, 'product_details'])->name('product-detail');
Route::get("/product/{slug}", [WebController::class, 'product'])->name('product-detail');

Route::group(['prefix'=>'admin','middleware'=>'guest'], function(){
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
});

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('categories', [AdminController::class, 'categories'])->name('categories');
    Route::post('categories_save', [AdminController::class, 'categories_save'])->name('categories_save');
    Route::post('categories_edit', [AdminController::class, 'categories_edit'])->name('categories_edit');
    Route::delete('categories_delete', [AdminController::class, 'categories_delete'])->name('categories_delete');

    Route::get('product', [AdminController::class, 'product'])->name('product');
    Route::get('product-add', [AdminController::class, 'productAdd'])->name('product-add');
    Route::get('product_edit', [AdminController::class, 'productEdit'])->name('product_edit');
    Route::get('delete_image', [AdminController::class, 'deleteImage'])->name('delete_image');
    Route::post('product_save', [AdminController::class, 'product_save'])->name('product_save');
    Route::post('product_image', [AdminController::class, 'productImage'])->name('product_image');
    Route::post('product_edit', [AdminController::class, 'product_edit'])->name('product_edit');
    Route::delete('product_delete', [AdminController::class, 'product_delete'])->name('product_delete');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


