<?php

use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesAllController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\OurClientsController;
use App\Http\Controllers\OurWorksController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Models\OurService;
use App\Models\OurWork;
use App\Models\Support;
use App\Models\User;
use App\Services\InstagramService;
use Illuminate\Support\Facades\Route;


Route::get('instagram/auth', fn() => redirect()->to(InstagramService::auth()));
Route::get('instagram/feeds', fn() => dd((new InstagramService)->getImages()));
Route::get('terms', fn() => 'Terms');
Route::get('instagram-auth-failure', fn() => dd(request()));
Route::get('instagram-auth-success', fn() => 'success');

Route::get('switch-theme', function () {
    $theme = request()->session()->get('theme', 'light');

    // Toggle between 'light' and 'dark' themes
    $newTheme = ($theme === 'light') ? 'dark' : 'light';

    // Store the new theme in the session
    request()->session()->put('theme', $newTheme);

    return redirect()->back();
})->name('switch.theme');

// Route::get('mail', function () {
//     return view('mails.send-reminder', ['title' => '', 'corp' => Corp::first(), 'target' => '']);
// });

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
    });

Route::get('/switch-langauge/{locale?}', function ($locale = 'ar') {

    $locale = session('lang_locale') === 'ar' ? 'en' : 'ar';

    session()->put('lang_locale', $locale);

    app()->setLocale(session('lang_locale'));

    return back();
})->name('switch-language');

Route::get('/about', [AboutUsController::class,'index'])->name('about-us');

Route::get('services/all', [ServicesAllController::class,'index'])->name('services.all');
Route::get('services/details/{id}', [ServicesAllController::class,'show'])->name('services.details');
Route::get('services/request/{id}', [ServicesAllController::class,'request'])->name('services.request');

Route::get('clients/reviews', function () {
    return view('reviews');
})->name('clients.reviews');

Route::resource('reviews', ReviewController::class)->only('store');

Route::resource('career', JobController::class);

Route::get('job/apply/{id}', [JobController::class,'apply'])->name('jobs.apply');

Route::get('contact', [ContactUsController::class, 'index'])->name('contact');

Route::resource('works', OurWorksController::class);
Route::get('search', [SearchController::class, 'index'])->name('search');

require __DIR__ . '/auth.php';

require __DIR__ . '/_dashboard.php';
