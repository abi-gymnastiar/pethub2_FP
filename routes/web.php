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
    return view('welcome');
});

//Route::get('/animals/create', [AnimalsController::class, 'create']);
Route::get('/animals', [AnimalsController::class, 'index']);
Route::post('/animals', [AnimalsController::class, 'store']);
Route::get('/animals/create', [AnimalsController::class, 'create']);
Route::get('/animals/{animals_id}', [AnimalsController::class, 'show']);
Route::get('/animals/{animals_id}/edit', [AnimalsController::class, 'edit']);
Route::put('/animals/{animals_id}', [AnimalsController::class, 'update']);

Route::get('/center/create', [CentersController::class, 'create']);
Route::get('/center', [CentersController::class, 'index']);
Route::post('/center', [CentersController::class, 'store']);
Route::get('/center/{center_id}/edit', [CentersController::class, 'edit']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
