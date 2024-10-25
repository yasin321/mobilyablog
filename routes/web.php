<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::controller(HomeController::class)->group(function (){
    Route::get("/","index")->name("home");
    Route::get("/hakkimizda","about")->name("about");
    Route::get("/galeri","galery")->name("galery");
    Route::get("/iletisim","contact")->name("contact");
});
Route::controller(AdminController::class)->prefix("admin")->group(function (){
    Route::get("/","index")->name("admin");
    Route::get("/hizmetler","services")->name("services");
    Route::get("/hizmet_ekle","servicesAdd")->name("servicesAdd");
    Route::get("/hizmet-kategoriler","servicesCategory")->name("servicesCategory");
    Route::post("/hizmet-kategori-ekle","servicesCategoryAdd")->name("servicesCategoryAdd");
    Route::get("/servicesCategoryRemove/{id}","servicesCategoryRemove")->name("servicesCategoryRemove");
    Route::post("/services_category_detail","services_category_detail")->name("services_category_detail");
    Route::post("/servicesCategoryUpdates","servicesCategoryUpdates")->name("servicesCategoryUpdates");
});
Route::any('/{page?}',function(){
    return View::make('site.404');
})->where('page','.*');
