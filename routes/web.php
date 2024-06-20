<?php

use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HomeController;
use App\Models\Corp;
use App\Models\OurService;
use App\Models\Service;
use App\Models\Support;
use App\Models\User;
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

Route::get('test', function () {
    return User::all();
});

Route::get('/template', function () {
    return view('welcome');
});

Route::get('switch-theme', function () {
    $theme = request()->session()->get('theme', 'light');

    // Toggle between 'light' and 'dark' themes
    $newTheme = ($theme === 'light') ? 'dark' : 'light';

    // Store the new theme in the session
    request()->session()->put('theme', $newTheme);

    return redirect()->back();
})->name('switch.theme');

Route::get('mail', function () {
    return view('mails.send-reminder', ['title' => '', 'corp' => Corp::first(), 'target' => '']);
});

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('/', 'index')->name('home');
    });

Route::get('/switch-langauge/{locale?}', function ($locale = 'ar') {

    session()->put('locale', $locale);

    app()->setLocale($locale);

    return back();
})->name('switch-language');

Route::get('clients/reviews', function () {
    return view('reviews');
})->name('clients.reviews');

Route::get('/jobs', function () {
    return view('job');
})->name('jobs.request');

Route::get('contact', function () {
    $supports = Support::all();
    return view('contact', compact('supports'));
})->name('contact');

Route::get('works', function () {
    return view('works');
})->name('works');

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