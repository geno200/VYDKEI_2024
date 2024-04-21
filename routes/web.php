<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EditContentController;
use App\Http\Controllers\Education\EducationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class, 'getHome'])->name('home');

Route::get('/about', [PagesController::class, 'getAbout'])->name('about');


Route::get('/profil', [EducationController::class, 'getProfil'])->name('Profil');

Route::get('/contact', [ContactController::class, 'getContact'])->name('contact');

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/reg', [RegistrationController::class, 'create'])->name('auth.reg');
Route::post('/reg', [RegistrationController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('auth.login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/bevezetes', [ContentController::class, 'bevezetes'])->name('bevezetes');

Route::post('/bevezetes', [ContentController::class, 'bevezetesSubmit']);

Route::get('/unit1_1', [ContentController::class, 'unit1_1'])->name('unit1_1');

Route::get('/unit1_2', [ContentController::class, 'unit1_2'])->name('unit1_2');

Route::get('/unit1_3', [ContentController::class, 'unit1_3'])->name('unit1_3');

Route::get('/unit2_1', [ContentController::class, 'unit2_1'])->name('unit2_1');

Route::get('/unit2_2', [ContentController::class, 'unit2_2'])->name('unit2_2');

Route::get('/unit2_3', [ContentController::class, 'unit2_3'])->name('unit2_3');

Route::get('/unit3_1', [ContentController::class, 'unit3_1'])->name('unit3_1');

Route::get('/unit3_2', [ContentController::class, 'unit3_2'])->name('unit3_2');

Route::get('/unit3_3', [ContentController::class, 'unit3_3'])->name('unit3_3');

Route::get('/unit4_1', [ContentController::class, 'unit4_1'])->name('unit4_1');

Route::get('/unit4_2', [ContentController::class, 'unit4_2'])->name('unit4_2');

Route::get('/unit4_3', [ContentController::class, 'unit4_3'])->name('unit4_3');

Route::get('/unit5_1', [ContentController::class, 'unit5_1'])->name('unit5_1');

Route::get('/unit5_2', [ContentController::class, 'unit5_2'])->name('unit5_2');

Route::get('/unit5_3', [ContentController::class, 'unit5_3'])->name('unit5_3');

Route::get('/unit1_quiz', [QuizController::class, 'unit1_quiz'])->name('unit1_quiz');

Route::get('/unit2_quiz', [QuizController::class, 'unit2_quiz'])->name('unit2_quiz');

Route::get('/unit3_quiz', [QuizController::class, 'unit3_quiz'])->name('unit3_quiz');

Route::get('/unit4_quiz', [QuizController::class, 'unit4_quiz'])->name('unit4_quiz');

Route::get('/unit5_quiz', [QuizController::class, 'unit5_quiz'])->name('unit5_quiz');

Route::get('/education/knowledge', [EducationController::class, 'getKnowledge'])->name('education.knowledge');

Route::get('/education/profil', [EducationController::class, 'getProfil'])->name('education.profil');

Route::put('/education/profil/update', [EducationController::class, 'updateProfil'])->name('education.profil.update');

Route::delete('/education/profil/delete', [EducationController::class, 'deleteProfil'])->name('education.profil.delete');

Route::post('/education/profil/updatePassword', [EducationController::class, 'updatePassword'])->name('education.profil.updatePassword');

Route::post('/edutaction/profil', [EducationController::class, 'sendEmailToTeacher'])->name('teacher.send');

Route::post('/register', [AdminAuthController::class, 'store'])->name('admin.register');

Route::get('/list', [EditContentController::class, 'list'])->name('edit.list');

Route::post('/showcontent', [EditContentController::class, 'showChosenFile'])->name('edit.show');

Route::post('/quizshowcontent',[EditContentController::class, 'showChosenQuizFile'])->name('quizedit.show');

Route::post('/updatefiles', [EditContentController::class, 'updateChosenFile'])->name('edit.update');

Route::post('/quizupdatefiles', [EditContentController::class, 'updateChosenQuizFile'])->name('quizedit.update');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('/register', [AdminAuthController::class, 'getRegister'])->name('adminRegister');
    Route::post('/register', [AdminAuthController::class, 'store'])->name('adminRegisterPost');
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', [AdminAuthController::class, 'getDashboard'])->name('adminDashboard');
        Route::delete('/user/{id}', [AdminAuthController::class, 'destroy'])->name('adminDeleteUser');
        Route::put('/users/{id}', [AdminAuthController::class, 'update'])->name('AdminChangeUsertype');
    });
});
