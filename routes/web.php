<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SliderController;

// Route::get('/', function () { return view('welcome'); });
Route::get('/', [FrontendController::class, 'index']);
Route::get('about', function () { return view('frontend.new.about'); });
Route::get('business', function () { return view('frontend.new.business'); });
Route::get('offers-today', function () { return view('frontend.new.offersToday'); });
Route::get('gallery', function () { return view('frontend.new.gallery'); });
Route::get('self-care', function () { return view('frontend.new.login'); });
Route::get('pay-online', function () { return view('frontend.new.pay'); });

Route::get('service', function () { return view('frontend.service'); });
// Route::get('package', function () { return view('frontend.package'); });
Route::get('package', [FrontendController::class, 'package']);
Route::post('package/store', [OrderController::class, 'store']);
Route::post('send-email', [OrderController::class, 'sendEmail']);
Route::get('solution', function () { return view('frontend.solution'); });
Route::get('contact', function () { return view('frontend.contact'); });
Route::get('news-media', function () { return view('frontend.news'); });

Route::post('contact/store', [ContactController::class, 'store']);

// service start 
Route::get('service/CloudServices', function () { return view('frontend.services.CloudServices'); });
Route::get('service/ConsumerElectronics&SmartDevices', function () { return view('frontend.services.ConsumerElectronics&SmartDevices'); });
Route::get('service/EnterpriseSolutions', function () { return view('frontend.services.EnterpriseSolutions'); });
Route::get('service/High-SpeedBroadbandInternet', function () { return view('frontend.services.High-SpeedBroadbandInternet'); });
Route::get('service/InfrastructureSolutions', function () { return view('frontend.services.InfrastructureSolutions'); });
Route::get('service/ManagedITServices', function () { return view('frontend.services.ManagedITServices'); });
Route::get('service/NetworkServices', function () { return view('frontend.services.NetworkServices'); });
Route::get('service/ProfessionalServices', function () { return view('frontend.services.ProfessionalServices'); });
Route::get('service/SecuritySolutions', function () { return view('frontend.services.SecuritySolutions'); });
Route::get('service/SoftwareSolutions', function () { return view('frontend.services.SoftwareSolutions'); });
// service end
  

// Route::get('login', function () { return view('frontend.login'); });
// Route::get('register', function () { return view('frontend.register'); });

Route::get('reset', function () { return view('frontend.reset'); });

Auth::routes();

// AUTH START ------------------------------------------------------------------
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});



// USER START ------------------------------------------------------------------
Route::middleware(['auth', 'user-access:User'])->group(function () {

});


// ADMIN START -----------------------------------------------------------------
Route::middleware(['auth', 'user-access:Admin'])->group(function () {

    Route::resource('contacts', ContactController::class);
    Route::resource('users', UserController::class);
    
    Route::resource('packages', PackageController::class);
    Route::get('packages-trash-list', [PackageController::class,'trashList']);
    Route::get('packages-restore/{id}', [PackageController::class, 'restore']);
    Route::get('packages-delete/{id}', [PackageController::class, 'delete']);
    
    Route::resource('apps', AppController::class);
    Route::get('facebook-pixel', [AppController::class,'facebookPixel']);
    Route::put('facebook-pixel-update', [AppController::class,'facebookPixelUpdate']);
    Route::resource('orders', OrderController::class);
    Route::resource('news', NewsController::class);
    Route::resource('sliders', SliderController::class);

});
  
use Illuminate\Support\Facades\Mail;
Route::get('/test-email', function () {
    try {
        Mail::raw('This is a test email from Laravel.', function ($message) {
            $message->to('arman.alawaf@gmail.com')->subject('Test Email');
        });
        return '✅ Mail sent successfully!';
    } catch (\Exception $e) {
        return '❌ Error: ' . $e->getMessage();
    }
});
