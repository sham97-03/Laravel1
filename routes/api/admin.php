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
Route::post('admin/register',[AuthController::class, 'adminRegister']);
Route::post('admin/login',[AuthController::class, 'adminLogin']);
Route::group( ['prefix' => 'admin','middleware' => ['auth:admin-api','scopes:Admin'] ],function(){
   // authenticated staff routes here
    Route::get('logout',[AuthController::class, 'adminLogout']);
    Route::post('addMedication',[MedicinesController::class, 'addMedication']);
    Route::get('searchMedicine/{word}',[MedicinesController::class, 'searchMedicine']);
    Route::get('showMedicine/{id}',[MedicinesController::class, 'showMedicine']);
    Route::get('showAllOrders',[OrderController::class, 'showAllOrders']);
    Route::post('updateOrders/{id}',[OrderController::class, 'updateOrders']);
    Route::get('showAdminNotifications',[NotificationController::class, 'showAdminNotifications']);
    Route::post('markAllAdminAsRead',[NotificationController::class, 'markAllAdminAsRead']);
    Route::post('markSelectedAdminAsRead',[NotificationController::class, 'markSelectedAdminAsRead']);
    Route::put('markAdminAsRead/{id}',[NotificationController::class, 'markAdminAsRead']);
});
