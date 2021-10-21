<?php

use App\Http\Controllers\DeleteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadXmlController;
use App\Http\Controllers\UpdateController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("read-xml", [ReadXmlController::class, "index"])->name('xml-upload');
Route::post("read-xml", [ReadXmlController::class, "store"]);
Route::get("update-xml", [UpdateController::class, "update"])->name('update');
Route::get("delete-xml", [DeleteController::class, "delete"])->name('delete');
