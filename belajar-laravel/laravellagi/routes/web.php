<?php

use App\Http\Controllers\StudentController;
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
    return view('home', [
        'name' => 'Cara Fajar',
        'job' => 'Admin',
        'buah' => ['apel', 'semangka', 'jeruk', 'nanas', 'pepaya',  'salak']
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
