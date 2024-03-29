<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\__Home_Controller;
use App\Models\ListsModel;
use App\Models\CategoriesModel;
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
/* GET__METHODS */

Route::get('/logout', [__Home_Controller::class, '__logout']);
Route::get('/portal', [__Home_Controller::class, '__form_page'])->name('__page_form');
Route::get('/lists/show', [__Home_Controller::class, '__List_show'])->middleware('__user_authentication')->name('__List_show');
Route::get('/music/show', [__Home_Controller::class, '__music_index'])->middleware('__user_authentication')->name('__music_index');
Route::get('/lists/Edit/{id}', [__Home_Controller::class, '__List_Edit'])->middleware('__user_authentication')->name('__List_Edit');
Route::get('/categories/show', [__Home_Controller::class, '__categories_index'])->middleware('__user_authentication')->name('__dashboard');
Route::get('/music/status/{id}', [__Home_Controller::class, '__Music_Status'])->middleware('__user_authentication')->name('__Music_Status');
Route::get('/lists/destroy/{id}', [__Home_Controller::class, '__List_destroy'])->middleware('__user_authentication')->name('__List_destroy');
Route::get('/wallpaper/show', [__Home_Controller::class, '__Wallpaper_index'])->middleware('__user_authentication')->name('__Wallpaper_index');
Route::get('/search', [__Home_Controller::class, '__Search_index'])->middleware('__user_authentication')->name('__Search_index');
Route::get('/search/{id}/{category}', [__Home_Controller::class, '__Search__'])->middleware('__user_authentication')->name('__Search__');
Route::get('/search/edit/{id}/{category}', [__Home_Controller::class, '__Search__Edit__'])->middleware('__user_authentication')->name('__Search__Edit__');
Route::post('/search/update', [__Home_Controller::class, '__Search__Update__'])->middleware('__user_authentication')->name('__Search__Update__');
Route::get('/delete/{id}/{cate}', [__Home_Controller::class, '__Search__Delete__'])->middleware('__user_authentication')->name('__Search__Delete__');
Route::get('/music/destroy/{id}', [__Home_Controller::class, '__Music_destroy'])->middleware('__user_authentication')->name('__Music_destroy');
Route::get('/wallpaper/status/{id}', [__Home_Controller::class, '__Wallpaper_Status'])->middleware('__user_authentication')->name('__Wallpaper_Status');
Route::get('/wallpaper/destroy/{id}', [__Home_Controller::class, '__Wallpaper_destroy'])->middleware('__user_authentication')->name('__Wallpaper_destroy');
Route::get('/categories/destroy/{id}', [__Home_Controller::class, '__Category_destroy'])->middleware('__user_authentication')->name('__Category_destroy');
Route::get('/categories/edit/{id}', [__Home_Controller::class, '__Category_edit__'])->middleware('__user_authentication')->name('__Category_edit__');

/* POST__METHODS */
Route::post('/auth', [__Home_Controller::class, '__user_authentication']);
Route::post('/categories/upload', [__Home_Controller::class, '__upload'])->middleware('__user_authentication')->name('__upload');
Route::post('/lists/update', [__Home_Controller::class, '__update_list'])->middleware('__user_authentication')->name('__update_list');
Route::post('/music/upload', [__Home_Controller::class, '__upload_music'])->middleware('__user_authentication')->name('__upload_music');
Route::post('/product/upload', [__Home_Controller::class, '__upload_product'])->middleware('__user_authentication')->name('__upload_product');
Route::post('/wallpaper/upload', [__Home_Controller::class, '__upload_wallpaper'])->middleware('__user_authentication')->name('__upload_wallpaper');
Route::post('/upload/edit', [__Home_Controller::class, '__upload__edit__'])->middleware('__user_authentication')->name('__upload__edit__');

/** MENU__VIEWS */
Route::get('/', [__Home_Controller::class, '__menu'])->name('menu');

/** API */
Route::get('/get/categories/', [__Home_Controller::class, '__get__categories__'])->name('__get__categories__');
Route::get('/get/categories/en', [__Home_Controller::class, '__get__categories__en'])->name('__get__categories__en');
Route::get('/get/categories/ar', [__Home_Controller::class, '__get__categories__ar'])->name('__get__categories__ar');
Route::get('/get/category/{title}/{lang}/{id}', [__Home_Controller::class, '__get__category__'])->name('__get__category__');
Route::get('/list/ajax/{id}', [__Home_Controller::class, '__api__List_Edit'])->middleware('__user_authentication')->name('__api__List_Edit');
Route::get('/category/ajax/{id}', [__Home_Controller::class, '__api__category_Edit'])->middleware('__user_authentication')->name('__api__category_Edit');
Route::get('/wallpaper/ajax/{id}', [__Home_Controller::class, '__api__wallpaper_Edit'])->middleware('__user_authentication')->name('__api__wallpaper_Edit');




Route::get('/cloning', function () {
    return ListsModel::where('lang', 'AR')->get();
});
