<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\Leader;
use App\Http\Controllers\Admin\LeaderController;
use App\Http\Controllers\Admin\LessonsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\Rekvizitcontroller;
use App\Http\Controllers\Admin\Seman1Controller;
use App\Http\Controllers\Admin\Seman2Controller;
use App\Http\Controllers\Admin\SportsController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

// Language
Route::get('/lang/{lang}', function($lang){
    session(['lang' => $lang]);
    return back();
 });

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/faq', [MainController::class, 'faq'])->name('faq');
Route::get('/gallery', [MainController::class, 'gallery'])->name('gallery');
Route::get('/leaders', [MainController::class, 'leaders'])->name('leaders');
Route::get('/lessons', [MainController::class, 'lessons'])->name('lessons');
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/requisites', [MainController::class, 'requisites'])->name('requisites');
Route::get('/schoolRule', [MainController::class, 'schoolRule'])->name('schoolRule');
Route::get('/services1', [MainController::class, 'services1'])->name('services1');
Route::get('/services2', [MainController::class, 'services2'])->name('services2');
Route::get('/sports', [MainController::class, 'sports'])->name('sports');
Route::get('/stateSymbols', [MainController::class, 'stateSymbols'])->name('stateSymbols');
Route::get('/strategy', [MainController::class, 'strategy'])->name('strategy');
Route::get('/teachers', [MainController::class, 'teachers'])->name('teachers');
Route::get('/lesson_show/{id}', [MainController::class, 'lesson_show'])->name('lesson_show');
Route::get('/teacher_show/{id}', [MainController::class, 'teacher_show'])->name('teacher_show');
Route::get('/show_news/{id}', [MainController::class, 'show_news'])->name('show_news');
Route::get('/cookie', [MainController::class, 'cookie'])->name('cookie');
Route::get('/privacy', [MainController::class, 'privacy'])->name('privacy');
Route::get('/terms', [MainController::class, 'terms'])->name('terms');
Route::get('/sport_show/{id}', [MainController::class, 'sport_show'])->name('sport_show');
Route::get('/leader_show/{id}', [MainController::class, 'leader_show'])->name('leader_show');








Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('news', NewsController::class);
    Route::resource('leaders', LeaderController::class);
    Route::resource('teachers', TeachersController::class);
    Route::resource('lessons', LessonsController::class);
    Route::resource('sports', SportsController::class);
    Route::resource('rekvizits', Rekvizitcontroller::class);
    Route::resource('contact', ContactController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('smena1', Seman1Controller::class);
    Route::resource('smena2', Seman2Controller::class);
    Route::resource('students', StudentController::class);

});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
