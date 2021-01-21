<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale' ,$locale);
    return redirect()->back();

});

Auth::routes();
// )->middleware('auth');
Route::resource('/', 'HomeController');


Route::resource('/blog', 'BlogController');

Route::resource('/course', 'CourseController');

Route::resource('/contact', 'ContactController');

Route::get('/about', function () {
    return view('about.about');
});



Route::get('/blog-single', function () {
    return view('blog-single.blog-single');
});
Route::get('/course-single', function () {
    return view('course-single.course-single');
});

// Route::get('/login', function () {
//     return view('login.login');
// });
// Route::get('/register', function () {
//     return view('register.register');
// });



Route::get('/home', 'HomeController@index')->name('home');
