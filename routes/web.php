<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorsToPatientController;
use App\Http\Controllers\Api\V2\IndexController;

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
Route::resource('users', UsersController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('doctorstopatients', DoctorsToPatientController::class);

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/test', function () {
        return view('welcome');
    });
});


Route::get('calendar', [CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('api/v2', [IndexController::class, 'index']);
Route::get('api/v2/all', [IndexController::class, 'all']);
Route::middleware('auth.api')->get('api/v2/user/{id}', [IndexController::class, 'user']);

