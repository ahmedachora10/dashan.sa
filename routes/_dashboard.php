<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\CorpController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HeadlineController;
use App\Http\Controllers\Admin\HeadlineTranslationController;
use App\Http\Controllers\Admin\JobCityController;
use App\Http\Controllers\Admin\JobPostController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MonthlyQuarterlyUpdateController;
use App\Http\Controllers\Admin\OurClientController;
use App\Http\Controllers\Admin\OurServiceController;
use App\Http\Controllers\Admin\OurWorkController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\RegistryController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\VisionController;
use App\Http\Controllers\Admin\WhyUsController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard\Branch\StoreCertificate;
use App\Livewire\Dashboard\Branch\StoreCivilDefenseCertificate;
use App\Livewire\Dashboard\Branch\StoreEmployee;
use App\Livewire\Dashboard\Branch\StoreMonthlyQuarterlyUpdate;
use App\Livewire\Dashboard\Branch\StoreRecord;
use App\Livewire\Dashboard\Branch\StoreRegistry;
use App\Livewire\Dashboard\Branch\StoreSubscription;
use App\Livewire\Dashboard\Container\BranchRegistriesContainer;
use App\Livewire\Dashboard\Container\ContactUsContainer;
use App\Livewire\Dashboard\Container\EmployeesContainer;
use App\Livewire\Dashboard\Container\JobRequestsContainer;
use App\Livewire\Dashboard\Container\NotificationsContainer;
use App\Livewire\Dashboard\Container\ServiceRequestsContainer;
use App\Livewire\Dashboard\Container\SubscribersContainer;
use App\Models\OurWork;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function ()
{
    Route::controller(SettingController::class)
    ->prefix('settings')->name('settings.')
    ->group(function ()
    {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('verified')->name('dashboard');

    Route::resource('users', UserController::class);

    Route::resource('visions', VisionController::class);

    Route::resource('roles', RoleController::class)->only('index', 'destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('sliders', SliderController::class);
    Route::resource('our-services', OurServiceController::class);
    Route::resource('our-clients', OurClientController::class);
    Route::get('subscribers', SubscribersContainer::class)->name('subscribers.index');
    Route::get('contact-us', ContactUsContainer::class)->name('contact-us.index');
    Route::resource('statistics', StatisticController::class);
    Route::resource('services', ServiceController::class);

    Route::post('our-works/media/remove', [OurWorkController::class, 'removeMedia'])
        ->name('our-works.media.remove');

    Route::post('our-works/add-images/{work}', [OurWorkController::class, 'uploadImages'])->name('our-works.add-images.store');
    Route::resource('our-works', OurWorkController::class);
    Route::resource('tags', TagController::class);

    Route::get('job-requests', JobRequestsContainer::class)->name('job-requests.index');
    Route::resource('requests/jobs', JobPostController::class);//->parameter('translation', 'headlineTranslation');
    Route::resource('job-cities', JobCityController::class);
    Route::resource('support', SupportController::class);
    Route::resource('headlines', HeadlineController::class)->only(['index', 'update']);
    Route::get('service-requests', ServiceRequestsContainer::class)->name('services.requests');
    Route::resource('faq', FaqController::class);
    Route::resource('team', TeamController::class);
    Route::post('about-us/media/remove', [AboutController::class, 'removeMedia'])
        ->name('about-us.media.remove');
    Route::resource('about-us', AboutController::class);
    Route::resource('reviews', ReviewController::class)->except('store');
    Route::resource('why-us', WhyUsController::class)->only(['index', 'update']);
    Route::resource('certificates', CertificateController::class)->except('index');

    Route::controller(MediaController::class)
        ->name('media.')
        ->prefix('media')
        ->group(function () {
            Route::post('/', 'store')->name('store');
        });
});
