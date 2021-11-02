<?php

use App\Http\Controllers\admin\auth\adminController;
use App\Http\Controllers\Exam\QuestionsController;
use App\Http\Controllers\Exam\QuizController;
use App\Http\Controllers\FrontEnd\ExamController;
use App\Http\Controllers\user\auth\userController;
use App\Models\Lecturer;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.pages.homepage');
});
Route::resource('quiz',QuizController::class)->except('index');
Route::get('quizes/addQuestion/{id}', [QuizController::class, 'addQuestion'])->name('addquestion');
Route::resource('question',QuestionsController::class)->except('destroy');

Route::get('/home-quiz', [ExamController::class, 'QuizList'])->name('frontend.quiz');
Route::get('/exam-start/{id}', [ExamController::class, 'exam'])->name('frontend.exam');
Route::post('/exams', [ExamController::class, 'examPost'])->name('frontend.exam.post');
Route::get('/my_result', [ExamController::class, 'examResult'])->name('frontend.exam.result');
Route::get('/my_result-details', [ExamController::class, 'ResultDetails'])->name('frontend.exam.result.details');


Route::prefix('user')->group(function (){
    Route::middleware(['guest'])->group(function (){
        Route::get('/getlogin', [UserController::class, 'getLogin'])->name('user.getlogin');
        Route::post('/postlogin', [UserController::class, 'postLogin'])->name('user.postlogin');
        Route::get('/getregister', [UserController::class, 'register'])->name('user.getregister');
        Route::post('/postregister', [UserController::class, 'PostRegister'])->name('user.postregister');
//        Route::post('/check', [AdminController::class, 'check'])->name('admin.check');

    });
    Route::middleware(['auth:web'])->group(function (){
        Route::get('/homepage', [UserController::class, 'homepage'])->name('user.home');
        Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
    });
});

Route::prefix('admin')->group(function (){

    Route::middleware(['guest'])->group(function (){
        Route::get('/get/login', [AdminController::class, 'getLogin'])->name('admin.get.login');
        Route::post('/post/login', [AdminController::class, 'postLogin'])->name('admin.post.login');

    });
    Route::middleware(['auth:admin'])->group(function (){
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');


    });
});
Route::prefix('lecturer')->group(function (){

    Route::middleware(['guest'])->group(function (){
        Route::get('/get/login', [Lecturer::class, 'getLogin'])->name('lecture.get.login');
        Route::post('/post/login', [Lecturer::class, 'postLogin'])->name('lecture.post.login');

    });
    Route::middleware(['auth:admin'])->group(function (){
        Route::get('dashboard', [Lecturer::class, 'dashboard'])->name('lecture.dashboard');
        Route::get('/logout', [Lecturer::class, 'logout'])->name('lecture.logout');


    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
