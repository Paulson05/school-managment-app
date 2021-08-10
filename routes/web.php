<?php

use App\Http\Controllers\Exam\QuestionsController;
use App\Http\Controllers\Exam\QuizController;
use App\Http\Controllers\FrontEnd\ExamController;
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
Route::get('quizes/addQuestion/{id}', [QuizController::class, 'addQuestion'])->name('addquestion');
Route::resource('question',QuestionsController::class)->except('destroy');

Route::get('/home-quiz', [ExamController::class, 'QuizList'])->name('frontend.quiz');
Route::get('/exam_quiz/{id}', [ExamController::class, 'exam'])->name('frontend.exam');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
