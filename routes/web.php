<?php

use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HomeController;
use App\Models\OurService;
use App\Models\OurWork;
use App\Models\Support;
use App\Services\InstagramService;
use Illuminate\Support\Facades\Route;


Route::get('/template', function () {
    return view('welcome');
});

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

Route::get('clients/reviews', function () {
    return view('reviews');
})->name('clients.reviews');

Route::resource('reviews', ReviewController::class)->only('store');

Route::get('/jobs', function () {
    return view('job');
})->name('jobs.request');

Route::get('contact', function () {
    $supports = Support::all();
    return view('contact', compact('supports'));
})->name('contact');

Route::get('works/{work}/details', function (OurWork $work) {
    return view('work-details', compact('work'));
})->name('works.show');

Route::get('services/all', function () {
    return view('services');
})->name('services.all');

Route::get('services/{service}/details', function (OurService $service) {
    return view('service-details', compact('service'));
})->name('services.details');

Route::get('services/request/{service}', function (OurService $service) {
    return view('service-request', compact('service'));
})->name('services.request');

require __DIR__ . '/auth.php';

require __DIR__ . '/_dashboard.php';