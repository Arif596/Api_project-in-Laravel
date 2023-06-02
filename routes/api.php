<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;
use App\Http\Controllers\DeviceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//get data with api from database
Route::get("Data",[dummyApi::class,'getData']);
Route::get('hello/{id?}',[DeviceController::class,'hello']);
Route::get('/add',function(){
return view('add');
});
Route::get('/add',function(){
    return view('add');
});
//add new record with api in database
Route::post("add",[DeviceController::class,'add']);
// update data with put api method  
Route::put("update",[DeviceController::class,'update']);
// Delete Data with delete api method from database
Route::delete('delete/{id}',[DeviceController::class,'delete']);
//search data from database with api get method
Route::get('search/{name}',[DeviceController::class,'search']);
// Validtion in api 
Route::post("validate",[DeviceController::class,'testData']);