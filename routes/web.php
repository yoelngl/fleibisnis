<?php

use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Event;
use App\Http\Livewire\Pages\Expert;
use App\Http\Livewire\Pages\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\TodayNews;
use Illuminate\Support\Facades\Session;
use App\Http\Livewire\Auth\Master\Login;
use App\Http\Livewire\Pages\Admin\Profile;
use App\Http\Livewire\Pages\ExpertDetails;
use App\Http\Livewire\Pages\RetailDirectory;
use App\Http\Livewire\Pages\Master\Dashboard;
use App\Http\Livewire\Pages\FranchiseDirectory;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Livewire\Pages\Directory\RetailDetails;
use App\Http\Livewire\Pages\Master\Retail\RetailForm;
use App\Http\Livewire\Pages\Master\Retail\RetailIndex;
use App\Http\Livewire\Pages\Directory\FranchiseDetails;
use App\Http\Livewire\Pages\Master\Franchise\FranchiseForm;
use App\Http\Livewire\Pages\Master\Franchise\FranchiseIndex;

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
Route::GET('/retail-details/{slug}',RetailDetails::class)->name('retail-details');
Route::GET('/franchise-details',FranchiseDetails::class)->name('franchise-details');
Route::GET('/events',Event::class)->name('events');

Route::GET('/admin/master/login',Login::class)->name('admin.login');

Route::middleware(['role:admin'])->group(function () {
    Route::GET('/dashboard',Dashboard::class)->name('admin.dashboard');

    Route::GET('/admin/retail-directory',RetailIndex::class)->name('admin.retail');
    Route::GET('/admin/retail-directory/add',RetailForm::class)->name('admin.retail.add');
    Route::GET('/admin/retail/edit/{slug}',RetailForm::class)->name('admin.retail.edit');

    Route::GET('/admin/franchise-directory',FranchiseIndex::class)->name('admin.franchise');
    Route::GET('/admin/franchise-directory/add',FranchiseForm::class)->name('admin.franchise.add');
    Route::GET('/admin/franchise/edit/{slug}',FranchiseForm::class)->name('admin.franchise.edit');
});
