<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Event;
use App\Http\Livewire\Pages\Expert;
use App\Http\Livewire\Pages\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\TodayNews;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Pages\Admin\Profile;
use App\Http\Livewire\Pages\ExpertDetails;
use App\Http\Livewire\Pages\RetailDirectory;
use App\Http\Livewire\Pages\FranchiseDirectory;
use App\Http\Controllers\VerificationController;
use App\Http\Livewire\Pages\Directory\RetailDetails;
use App\Http\Livewire\Pages\Directory\FranchiseDetails;

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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/user/verify/{token}', [VerificationController::class, 'verifyUser'])->name('verify.email');

Route::middleware(['role:users','permission:not-valid'])->group(function () {
    Route::GET('/my-profile',Profile::class)->name('admin.profile');
});

Route::POST('/logout',[AuthenticationController::class, 'logout'])->name('logout');



Route::GET('/',Home::class)->name('home');
Route::GET('/ask-the-expert',Expert::class)->name('expert');
Route::GET('/ask-the-expert/details',ExpertDetails::class)->name('expert.details');
Route::GET('/today-news',TodayNews::class)->name('today-news');
Route::GET('/contact',Contact::class)->name('contact');
Route::GET('/franchise-directory', FranchiseDirectory::class)->name('franchise-directory');
Route::GET('/retail-directory', RetailDirectory::class)->name('retail-directory');
Route::GET('/retail-details',RetailDetails::class)->name('retail-details');
Route::GET('/franchise-details',FranchiseDetails::class)->name('franchise-details');
Route::GET('/events',Event::class)->name('events');
