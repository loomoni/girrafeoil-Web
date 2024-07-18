<?php

use App\Http\Controllers\Backend\Aboutus\AboutUsController;
use App\Http\Controllers\Backend\Aboutus\TeamController;
use App\Http\Controllers\Backend\Home\SlidersController;
use App\Http\Controllers\Backend\Home\TestimonialsController;
use App\Http\Controllers\Backend\News\NewsController;
use App\Http\Controllers\Backend\Services\ServicesLocationController;
use App\Http\Controllers\Frontend\Home\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('about-us', [HomeController::class, 'aboutUs']);
Route::get('services', [HomeController::class, 'services']);
Route::get('news', [HomeController::class, 'news']);
Route::get('news/details/id', [HomeController::class, 'newsDetails']);
Route::get('contact-us', [HomeController::class, 'contactUs']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function ()
{

    Route::prefix('admin')->group(function () {

        //Sliders
        Route::get('sliders', [SlidersController::class, 'index']);
        Route::get('sliders/create', [SlidersController::class, 'create']);
        Route::post('sliders/create', [SlidersController::class, 'store']);
        Route::get('sliders/edit/{id}', [SlidersController::class, 'edit']);
        Route::put('sliders/edit/{id}', [SlidersController::class, 'update']);
        Route::get('sliders/delete/{id}', [SlidersController::class, 'delete']);

        // Testimonials Route
        Route::get('testimonials', [TestimonialsController::class, 'index']);
        Route::get('testimonials/create', [TestimonialsController::class, 'create']);
        Route::post('testimonials/create', [TestimonialsController::class, 'store']);
        Route::get('testimonials/edit/{id}', [TestimonialsController::class, 'edit']);
        Route::post('testimonials/edit/{id}', [TestimonialsController::class, 'update']);
        Route::get('testimonials/delete/{id}', [TestimonialsController::class, 'delete']);

        // Aboutus Route
        Route::get('about-us', [AboutUsController::class, 'index']);
        Route::get('about-us/create', [AboutUsController::class, 'create']);
        Route::post('about-us/create', [AboutUsController::class, 'store']);
        Route::get('about-us/edit/{id}', [AboutUsController::class, 'edit']);
        Route::post('about-us/edit/{id}', [AboutUsController::class, 'update']);
        Route::get('about-us/delete/{id}', [AboutUsController::class, 'delete']);

        // Team Route
        Route::get('team', [TeamController::class, 'index']);
        Route::get('team/create', [TeamController::class, 'create']);
        Route::post('team/create', [TeamController::class, 'store']);
        Route::get('team/edit/{id}', [TeamController::class, 'edit']);
        Route::post('team/edit/{id}', [TeamController::class, 'update']);
        Route::get('team/delete/{id}', [TeamController::class, 'delete']);

        // Services Location Route
        Route::get('services-location', [ServicesLocationController::class, 'index']);
        Route::get('services-location/create', [ServicesLocationController::class, 'create']);
        Route::post('services-location/create', [ServicesLocationController::class, 'store']);
        Route::get('services-location/edit/{id}', [ServicesLocationController::class, 'edit']);
        Route::post('services-location/edit/{id}', [ServicesLocationController::class, 'update']);
        Route::get('services-location/delete/{id}', [ServicesLocationController::class, 'delete']);

        // News Route
        Route::get('news', [NewsController::class, 'index']);
        Route::get('news/create', [NewsController::class, 'create']);
        Route::post('news/create', [NewsController::class, 'store']);
        Route::get('news/edit/{id}', [NewsController::class, 'edit']);
        Route::post('news/edit/{id}', [NewsController::class, 'update']);
        Route::get('news/delete/{id}', [NewsController::class, 'delete']);

    });
});
