<?php

//use App\Http\Controllers\admin\auth\adminController;


use App\Http\Controllers\admin\auth\adminController;
use App\Http\Controllers\admin\CourserRegistrationController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\admin\ExamResultController;
use App\Http\Controllers\admin\FacultyController;
use App\Http\Controllers\admin\LevelController;
use App\Http\Controllers\admin\SemesterController;
use App\Http\Controllers\CourseRegistrationController;
use App\Http\Controllers\Exam\QuestionsController;
use App\Http\Controllers\Exam\QuizController;


use App\Http\Controllers\Lecturer\LecturerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\user\auth\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.pages.homepage');
})->name('frontend.homepage');
Route::resource('quiz',QuizController::class)->except('index');
Route::get('quizes/addQuestion/{id}', [QuizController::class, 'addQuestion'])->name('addquestion');
Route::resource('question',QuestionsController::class)->except('destroy');
Route::resource('level', LevelController::class)->except('create');




//
//Route::get('/home-quiz', [ExamController::class, 'QuizList'])->name('frontend.quiz');
//Route::get('/exam-start/{id}', [ExamController::class, 'exam'])->name('frontend.exam');
//Route::post('/exams', [ExamController::class, 'examPost'])->name('frontend.exam.post');
//Route::get('/my_result', [ExamController::class, 'examResult'])->name('frontend.exam.result');
//Route::get('/my_result-details', [ExamController::class, 'ResultDetails'])->name('frontend.exam.result.details');


Route::prefix('user')->group(function (){
    Route::middleware(['guest'])->group(function (){
        Route::get('/getlogin', [UserController::class, 'getLogin'])->name('user.getlogin');
        Route::post('/postlogin', [UserController::class, 'postLogin'])->name('user.postlogin');
        Route::get('/getregister', [UserController::class, 'register'])->name('user.getregister');
        Route::post('/postregister', [UserController::class, 'PostRegister'])->name('user.postregister');
//        Route::post('/check', [AdminController::class, 'check'])->name('admin.check');

    });
    Route::middleware(['auth:web'])->group(function (){
        Route::get('/homepage', [UserController::class, 'index'])->name('user.home');
        Route::get('course/registrstion', [UserController::class, 'courseRegistration'])->name('user.courseRegitration');
        Route::get('/acceptance', [UserController::class, 'acceptance'])->name('user.acceptance');
        Route::get('/payment', [UserController::class, 'payment'])->name('user.payment');
        Route::get('/schoolfees', [UserController::class, 'schoolfees'])->name('user.schoolfees');
        Route::get('/myresult', [UserController::class, 'result'])->name('user.result');
        Route::get('course/registtration/pdf', [UserController::class,  'CourserRegistrationPdf'])->name('course.registration.pdf');


        Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
        Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
        Route::get('/getpayment', [PaymentController::class, 'getPayment'])->name('getpayment');
        Route::get('/fetch-category', [PaymentController::class, 'fetchCategory']);
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
        Route::resource('department', DepartmentController::class)->except('create');
        Route::resource('faculty', FacultyController::class)->except('create');
        Route::resource('level', LevelController::class)->except('create');
        Route::resource('semester', SemesterController::class)->except('create');
        Route::resource('result', ExamResultController::class)->except('create');

        Route::resource('courseregistration', CourserRegistrationController::class)->except('create');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');


    });
});
Route::prefix('lecturer')->group(function (){

    Route::middleware(['guest'])->group(function (){
        Route::get('/get/login', [LecturerController::class, 'LectureGetLogin'])->name('lecture.get.login');
        Route::post('/post/login', [LecturerController::class, 'LecturePostLogin'])->name('lecture.post.login');

    });
    Route::middleware(['auth:lecturer'])->group(function (){
        Route::get('dashboard', [LecturerController::class, 'dashboard'])->name('lecture.dashboard');
        Route::get('/logout', [LecturerController::class, 'logout'])->name('lecture.logout');


    });
});


Route::resource('role', RolesController::class)->only(['index','store','show','update','destroy','edit',]);
//Route::get('role/index', [RolesController::class, 'index'])->name('role.index');
//Route::get('role/create', [RolesController::class, 'create'])->name('role.create');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
