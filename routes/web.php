<?php

use App\Http\Controllers\Exam\QuizController;
use Illuminate\Support\Facades\Route;

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
    return view('backend.pages.dashboard');
});
Route::resource('quiz',QuizController::class)->except('index');
Route::get('quizes/addQuestion/{id}', [QuizController::class, 'addQustion'])->name('addquestion');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
