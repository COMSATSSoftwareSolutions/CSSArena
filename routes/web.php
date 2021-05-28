<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductFeatureController;
use App\Http\Controllers\HomeController;


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

Route::get('/', [ProductController::class, 'brandIndex'])->name('Index');

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('brand.Index');
Route::get('admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Product Categories Routes
Route::get('/product/categories', [ProductCategoryController::class, 'index'])->name('cat_Index');
Route::get('/product/categories/create', [ProductCategoryController::class, 'create'])->name('prod_cat_create');
Route::post('/Product/Categories/store', [ProductCategoryController::class, 'store'])->name('prodcat_store');
Route::get('/Product/Categories/show/{productcategory}', [ProductCategoryController::class, 'show'])->name('Prodcat_show');
Route::any('/Product/Categories/edit/{productcategory}', [ProductCategoryController::class, 'edit'])->name('Prodcat_edit');
Route::any('/Product/Categories/update/{productcategory}', [ProductCategoryController::class, 'update'])->name('Prodcat_update');
Route::delete('/Product/Categories/destroy/{productcategory}', [ProductCategoryController::class, 'destroy'])->name('Prodcat_destroy');

Route::resource('product/category', ProductCategoryController::class);

// Product table Route
Route::post('product/store', [ProductController::class, 'store'])->name('addproduct');
Route::any('product/bycategory/{id}', [ProductController::class, 'showbycategory'])->name('showbycat');
Route::resource('/products',ProductController::class);
Route::any('product/detail/{id}', [ProductController::class, 'productdetail'])->name('product-detail');
Route::any('product/view/{id}', [ProductController::class, 'productview'])->name('product-view');
Route::any('product/compare/{product}', [ProductController::class, 'productcompare'])->name('product-compare');
// Route::get('product/compare/{product2}', [ProductController::class, 'productcompare'])->name('product-compare');
Route::any('product/compareresult', [ProductController::class, 'compareresult'])->name('compare-result');
Route::any('/product/search', [ProductController::class, 'search']);
// Product Features Route
Route::any('product/feature/addfeature/{ProductFeature}', [ProductFeatureController::class, 'addfeature'])->name('add-feature');
Route::resource('product/feature', ProductFeatureController::class);
Route::get('product/allproduct/{id}', [ProductController::class, 'allproduct'])->name('all-product');
