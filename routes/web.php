<?php

use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadAbstractController;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('homepage.index', [
        'title' => 'Home'
    ]);
});

Route::get('/rundown-icics2023', function () {
    return view('homepage.rundown', ['title' => 'Rundown ICICS 2023']);
});

Route::get('/dashboard', function () {
    if (Auth::user()->role === 'administrator') {
        return view('administrator.dashboard', [
            'title' => 'Dashboard'
        ]);
    } else {
        return view('participant.dashboard', [
            'title' => 'Dashboard'
        ]);
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //PROFILE
    Route::get('/profile', function () {
        return view('participant.profile', [
            'title' => 'My Profile'
        ]);
    });
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'verified'])->group(function () {

    //ADMINISTRATOR
    Route::get('/abstrak', function () {
        return view('participant.abstrak', [
            'title' => 'My Abstrak'
        ]);
    });
    Route::get('/registered-participant', [ParticipantController::class, 'index']);
    Route::get('/validation-hki-member', [ParticipantController::class, 'validateMember']);
    Route::get('/review-abstract', [UploadAbstractController::class, 'review']);

    //PARTICIPANT
    Route::get('/payment', [PaymentController::class, 'payment']);
});

require __DIR__ . '/auth.php';
