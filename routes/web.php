<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ButtonController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\RoomAdminController;
use App\Http\Controllers\TeamAdminController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\BookingformController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactAdminController;
use App\Http\Controllers\GalleryAdminController;
use App\Http\Controllers\RestaurantbgController;


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


// User Route
Route::resource('/', HomeController::class);
Route::resource('/rooms-list', RoomsController::class);
Route::resource('/team', StaffController::class);
Route::resource('/gallery', GalleryController::class);
Route::resource('/blog', ArticleController::class);
Route::resource('/booking-form', BookingformController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/contact-me', ContactFormController::class);



// Admin Pages Route 
Route::resource('/home-back', HomeAdminController::class);
Route::resource('/team-back', TeamAdminController::class);
Route::resource('/room-back', RoomAdminController::class);
Route::resource('/blog-back', BlogAdminController::class);
Route::resource('/gallery-back', GalleryAdminController::class);
Route::resource('/contact-us-back', ContactAdminController::class);
Route::resource('/buttons', ButtonController::class);
Route::resource('/icons', IconController::class);
Route::resource('/style-guide', StyleController::class);



// Admin HomePage Route
Route::resource('/home-description', DescriptionController::class);
Route::resource('/home-service', ServiceController::class);
Route::resource('/home-testimonial', TestimonialController::class);
Route::resource('/home-restaurant', RestaurantController::class);
Route::resource('/home-restaurantbg', RestaurantbgController::class);
Route::resource('/home-video', VideoController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::fallback( function () {
    return view('pages.404');
});
