<?php

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
    return view('pages/welcome');
});
Route::get('/index', function () {
    return view('pages/index');
});
Route::get('/attorney', function () {
    return view('pages/attorney');
});
Route::get('/attorney-details', function () {
    return view('pages/attorney-details');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/blog', function () {
    return view('pages/blog');
});
Route::get('/blog-details', function () {
    return view('pages/blog-details');
});
Route::get('/case-study', function () {
    return view('pages/case-study');
});
Route::get('/case-study-details', function () {
    return view('pages/case-study-details');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/gallery.', function () {
    return view('pages/gallery.');
});

Route::get('/privacy-policy', function () {
    return view('pages/privacy-policy');
});
Route::get('/services', function () {
    return view('pages/services');
});
Route::get('/service-details', function () {
    return view('pages/service-details');
});
Route::get('/sign-in', function () {
    return view('pages/sign-in');
});
Route::get('/sign-up', function () {
    return view('pages/sign-up');
});
Route::get('/team', function () {
    return view('pages/team');
});
Route::get('/terms-condition', function () {
    return view('pages/terms-condition');
});
Route::get('/testimonials', function () {
    return view('pages/testimonials');
});
Route::get('/alternate-dispute', function () {
    return view('pages/alternate-dispute');
});
Route::get('/civil', function () {
    return view('pages/civil');
});
Route::get('/clinical', function () {
    return view('pages/clinical');
});
Route::get('/corporate', function () {
    return view('pages/corporate');
});
Route::get('/criminal', function () {
    return view('pages/criminal');
});
Route::get('/foreign', function () {
    return view('pages/foreign');
});

Route::get('/immigration', function () {
    return view('pages/immigration');
});

Route::get('/international', function () {
    return view('pages/international');
});

Route::get('/legislative-drafting', function () {
    return view('pages/legislative-drafting');
});

Route::get('/media-law', function () {
    return view('pages/media-law');
});

Route::get('/multi-Jurisdictional', function () {
    return view('pages/multi-Jurisdictional');
});

Route::get('/prof-negligence', function () {
    return view('pages/prof-negligence');
});
Route::get('/tax-audit', function () {
    return view('pages/tax-audit');
})->name('jhfhgfhg');

