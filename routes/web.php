<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NameController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReportDailyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('firebaseguest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/index', [GuestController::class, 'index']);
Route::get('/zetta-pacs', [GuestController::class, 'product']);

Route::middleware(['firebaseauth'])->group(function (){
    Route::get("/", function (){
        // dd(Session::all());
        // dd(Request::is('/'));
        return view('dashboard.index');
        // return view('welcome');
    });

    Route::resource('/users', UserController::class);
    // Route::resource('/products', ProductController_::class)->middleware('firebaseauth');

    Route::prefix('products')->group(function (){
        Route::resource('/categories', CategoryController::class);
        Route::resource('/kinds', NameController::class);
        Route::resource('/brands', BrandController::class);
        Route::resource('/types', TypeController::class);
        Route::resource('/serials', ProductController::class);
    });

    Route::resource('/reports', ReportController::class);
    Route::resource('/daily_reports', ReportDailyController::class);
    Route::get('/getProducts/{id}', [Controller::class, 'getProducts']);
    Route::get('/getBrands/{id}', [Controller::class, 'getBrands']);
    Route::get('/getTypes/{id}', [Controller::class, 'getTypes']);
    Route::get('/getSerialNumbers/{id}', [Controller::class, 'getSerialNumbers']);
    Route::get('/getVersions', [Controller::class, 'getVersions']);

    Route::resource('/customers', CustomerController::class);

    Route::resource('/schedules', ScheduleController::class);

});
