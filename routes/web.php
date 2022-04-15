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
    return view('pages/index');
})->name('home');

Route::get('/about', function () {
    return view('pages/about');
})->name('about-us');

Route::get('/attorney', function () {
    return view('pages/attorney');
})->name('attorney');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact-us');

Route::get('/practice-areas', function () {
    return view('pages/services');
})->name('practice-areas');

Route::get('/clients', function () {
    return view('pages/clients');
})->name('clients');

Route::get('/gallery.', function () {
    return view('pages/gallery');
})->name('gallery');

Route::get('/article', function () {
    return view('pages/article');
})->name('article');



Route::get('/attorney-details', function () {
    return view('pages/attorney-details');
});


Route::get('/article-details/birth-of-world', function () {
    return view('pages/articles/birth-of-world');
})->name('article.birth-of-world');

Route::get('/article-details/blues-of-trust', function () {
    return view('pages/articles/blues-of-trust');
})->name('article.blues-of-trust');

Route::get('/article-details/pak-china', function () {
    return view('pages/articles/pak-china');
})->name('article.pak-china');

Route::get('/privacy-policy', function () {
    return view('pages/privacy-policy');
});

Route::get('/service-details', function () {
    return view('pages/service-details');
});



Route::get('/civil', function () {
    return view('pages/practice_area/civil');
})->name('practice-area.civil');
Route::get('/clinical', function () {
    return view('pages/practice_area/clinical');
})->name('practice-area.clinical');
Route::get('/corporate', function () {
    return view('pages/practice_area/corporate');
})->name('practice-area.corporate');
Route::get('/criminal', function () {
    return view('pages/practice_area/criminal');
})->name('practice-area.criminal');
Route::get('/foreign', function () {
    return view('pages/practice_area/foreign');
})->name('practice-area.foreign');

Route::get('/immigration', function () {
    return view('pages/practice_area/immigration');
})->name('practice-area.immigration');

Route::get('/international', function () {
    return view('pages/practice_area/international');
})->name('practice-area.international');

Route::get('/alternate-dispute', function () {
    return view('pages/practice_area/alternate-dispute');
})->name('practice-area.alternate-dispute');

Route::get('/legislative-drafting', function () {
    return view('pages/practice_area/legislative-drafting');
})->name('practice-area.legislative-drafting');

Route::get('/media-law', function () {
    return view('pages/practice_area/media-law');
})->name('practice-area.media-law');

Route::get('/multi-Jurisdictional', function () {
    return view('pages/practice_area/multi-Jurisdictional');
})->name('practice-area.multi-Jurisdictional');

Route::get('/prof-negligence', function () {
    return view('pages/practice_area/prof-negligence');
})->name('practice-area.prof-negligence');

Route::get('/tax-audit', function () {
    return view('pages/practice_area/tax-audit');
})->name('practice-area.tax-audit');

Route::get('/articleddd/{category?}', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/article/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');


//adminpanel
Route::get('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'show'])->name('admin.login.show');
Route::post('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'login'])->name('admin.login');
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {

    Route::post('admin/logout', [App\Http\Controllers\Adminpanel\AuthController::class, 'logout'])->name('logout');

    //dashboard
    Route::controller(App\Http\Controllers\Adminpanel\DashboardController::class)->name('dashboard')->group(function () {
        Route::get('/', 'index');
    });


    //blog
    Route::controller(App\Http\Controllers\Adminpanel\BlogController::class)->prefix('blogs')->name('blog.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{blog}', 'show')->name('show');
        Route::get('/{blog}/edit', 'edit')->name('edit');
        Route::put('/{blog}', 'update')->name('update');
        Route::delete('/{blog:id}', 'destroy')->name('destroy');
    });

    //blog-category
    Route::controller(App\Http\Controllers\Adminpanel\BlogCategoryController::class)->prefix('blogs-category')->name('blog-category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{blogCategory}', 'show')->name('show');
        Route::get('/{blogCategory}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{blogCategory:id}', 'destroy')->name('destroy');
    });
});


