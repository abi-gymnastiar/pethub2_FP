<?php
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\CentersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

//Route::get('/animals/create', [AnimalsController::class, 'create']);
Route::get('/animals', [AnimalsController::class, 'index']);
Route::post('/animals', [AnimalsController::class, 'store']);
Route::get('/animals/create', [AnimalsController::class, 'create'])->middleware('App\Http\Middleware\Admin');
Route::get('/animals/{animals_id}', [AnimalsController::class, 'show']);
Route::get('/animals/{animals_id}/edit', [AnimalsController::class, 'edit'])->middleware('App\Http\Middleware\Admin');
Route::put('/animals/{animals_id}', [AnimalsController::class, 'update']);

Route::get('/center/create', [CentersController::class, 'create'])->middleware('App\Http\Middleware\Admin');
Route::get('/center', [CentersController::class, 'index']);
Route::post('/center', [CentersController::class, 'store']);
Route::get('/center/{centers_id}', [CentersController::class, 'show']);
Route::get('/center/{center_id}/edit', [CentersController::class, 'edit']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
