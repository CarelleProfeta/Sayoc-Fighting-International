<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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
    return redirect('/home');
});

Route::get('/sample', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/services-details', function () {
    return view('services-details');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/project-details', function () {
    return view('project-details');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/programs', function () {
    return view('programs');
});

Route::get('/leopoldo-lasaleta', function () {
    return view('instructor1');
});

Route::get('/joseph-roquid', function () {
    return view('instructor2');
});


Route::get('/charlie-mengullo', function () {
    return view('instructor3');
});

Route::post('send-mail', [MailController::class, 'contactUs'])->name('contact.submit');
Route::post('send-mail-instructor1', [MailController::class, 'instructor1'])->name('contact.instructor1');
Route::post('send-mail-instructor2', [MailController::class, 'instructor2'])->name('contact.instructor2');
Route::post('send-mail-instructor3', [MailController::class, 'instructor3'])->name('contact.instructor3');
