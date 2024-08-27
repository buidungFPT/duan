<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\AdController;
use  App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CateController;
use  App\Http\Controllers\Client\ClientController;
use  App\Http\Controllers\Client\CartController;

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
// Route::get('list-AD',[
//      Controller::class,'list'])->name('list');


Route::get('login',[AdController::class,'login'])->name('login');
Route::post('login',[AdController::class,'loginLogin'])->name('loginLogin');
Route::get('logout',[AdController::class,'logout'])->name('logout');
Route::get('dangki',[AdController::class,'dangki'])->name('dangki');
Route::post('dangki',[AdController::class,'postdangki'])->name('postdangki');
Route::get('quenmk',[AdController::class,'quenmk'])->name('quenmk');
// Route::post('quenmk',[AdController::class,'postdangki'])->name('postdangki');
// Route::post('quenmk',[AdController::class,'postdangki'])->name('postdangki');




Route::group(['prefix' => 'admin','as'=> 'admin.','middleware'=> 'checkAdmin'],function(){

      // Route::get('dash',[AdController::class,'dash'])->name('dash');
    
               Route::group(['prefix' => 'users','as'=> 'users.'],function(){

              
               Route::get('list-users',[UserController::class,'listUsers'])->name('listUsers');
               Route::post('add-users',[UserController::class,'addUsers'])->name('addUsers');
               Route::delete('delete-users',[UserController::class,'deleteUsers'])->name('deleteUsers');
               Route::get('detail-users',[UserController::class,'detailUsers'])->name('detailUsers');
               Route::patch('update-users',[UserController::class,'updateUsers'])->name('updateUsers');
               Route::get('home',[UserController::class,'home'])->name('home');

               
               });    
   Route::group(['prefix' => 'products','as'=> 'products.'],function(){
      Route::get('list-pro',[ProductsController::class,'listPro'])->name('listPro');

      Route::get('add-pro',[ProductsController::class,'addPro'])->name('addPro');
      Route::post('add-pro',[ProductsController::class,'postaddPro'])->name('postaddPro');

      Route::get('delete-pro/{id}',[ProductsController::class,'detetePro'])->name('detetePro');

      Route::get('detail-pro/{idproduct}',[ProductsController::class,'detailPro'])->name('detailPro');

      Route::get('update-pro/{idproduct}',[ProductsController::class,'updatePro'])->name('updatePro');

      Route::patch('update-pro/{idproduct}',[ProductsController::class,'updateProduct'])->name('updateProduct');




   });
   Route::group(['prefix' => 'category','as'=> 'category.'],function(){
      Route::get('list-cate',[ CateController::class,'listCate'])->name('listCate');

      Route::get('add-cate',[CateController::class,'addCate'])->name('addCate');
      
      Route::post('add-cate',[CateController::class,'postaddCate'])->name('postaddCate');

      Route::get('delete-cate/{id}',[CateController::class,'deleteCate'])->name('deleteCate');

      // Route::get('detail-pro/{idproduct}',[ProductsController::class,'detailPro'])->name('detailPro');

      Route::get('update-Cate/{idcate}',[CateController::class,'updateCate'])->name('updateCate');

      Route::patch('update-Cate/{idcate}',[CateController::class,'updateCategory'])->name('updateCategory');




   });

     
});
Route::group(['prefix' => 'client','as'=> 'client.'],function(){
      Route::group(['prefix' => 'user','as'=> 'user.'],function(){
        Route::get('home',[ClientController::class,'home'])->name('home');
        Route::get('Cateid/{id}',[ClientController::class,'Cateid'])->name('Cateid');
        Route::get('detail/{id}',[ClientController::class,'detail'])->name('detail');
        Route::get('search',[ClientController::class,'search'])->name('search');

        Route::group([
         'middleware' => 'checkUser'
        ],function(){
        Route::post('cart',[CartController::class,'addToCart'])->name('addToCart');
        Route::get('viewCart',[CartController::class,'viewCart'])->name('viewCart');
      });
});
});
