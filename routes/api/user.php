<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedicinesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\NotificationController;
use App\Notifications\OrderStatusNotification;
use App\Notifications\NewOrderNotification;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('user/register',[AuthController::class, 'UserRegister']);
Route::post('user/login',[AuthController::class, 'UserLogin']);
Route::group( ['prefix' => 'user','middleware' => ['auth:user-api','scopes:User'] ],function(){
   // authenticated staff routes here
    Route::get('logout',[AuthController::class, 'UserLogout']);
    Route::get('getMedicineCategory/{id}',[MedicinesController::class, 'getMedicineCategory']);
    Route::get('searchMedicine/{word}',[MedicinesController::class, 'searchMedicine']);
    Route::get('showMedicine/{id}',[MedicinesController::class, 'showMedicine']);
    Route::post('makeOrder',[OrderController::class, 'makeOrder']);
    Route::get('viewOrders',[OrderController::class, 'viewOrders']);
    Route::get('showUserNotifications',[NotificationController::class, 'showUserNotifications']);
    Route::post('markAllUserAsRead',[NotificationController::class, 'markAllUserAsRead']);
    Route::post('markSelectedUserAsRead',[NotificationController::class, 'markSelectedUserAsRead']);
    Route::put('markUserAsRead/{id}',[NotificationController::class, 'markUserAsRead']);
    Route::post('addToWishlist/{medicine}',[MedicinesController::class, 'addToWishlist']);
});
