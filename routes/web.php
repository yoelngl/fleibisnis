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
use App\Http\Livewire\Pages\Master\Event\EventForm;
use App\Http\Livewire\Pages\Master\Event\EventIndex;
use App\Http\Livewire\Pages\Master\Event\FranchiseWeek;
use App\Http\Livewire\Pages\Master\Expert\ExpertForm as ExpertExpertForm;
use App\Http\Livewire\Pages\Master\Expert\ExpertIndex;
use App\Http\Livewire\Pages\Master\Franchise\FranchiseForm;
use App\Http\Livewire\Pages\Master\Franchise\FranchiseIndex;
use App\Http\Livewire\Pages\Master\News\NewsIndex;
use App\Http\Livewire\Pages\Master\News\NewsForm;
use App\Http\Livewire\Pages\Master\Users\Subscribe;
use App\Http\Livewire\Pages\Master\Users\User;
use App\Http\Livewire\Pages\Master\Widget\Expert as WidgetExpert;
use App\Http\Livewire\Pages\Master\Widget\ExpertForm;
use App\Http\Livewire\Pages\TodayNewsDetail;
use App\Http\Livewire\Pages\Master\Widget\Banner\BannerIndex;
use App\Http\Livewire\Pages\Master\Widget\Banner\BannerForm;
use App\Http\Livewire\Pages\Master\Widget\Franchise\BrandForm;
use App\Http\Livewire\Pages\Master\Widget\Franchise\BrandIndex;
use App\Http\Livewire\Pages\Master\Widget\Slider\SliderForm;
use App\Http\Livewire\Pages\Master\Widget\Slider\SliderIndex;
use App\Http\Livewire\Pages\Master\Widget\Footer\FooterForm;
use App\Http\Livewire\Pages\Master\Widget\Footer\FooterIndex;
use App\Http\Livewire\Vendor\ResetPassword;


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

Route::GET('/reset-password',ResetPassword::class)->name('reset-password');



Route::GET('/',Home::class)->name('home');
Route::GET('/ask-the-expert',Expert::class)->name('expert');
Route::GET('/ask-the-expert/details/{slug}',ExpertDetails::class)->name('expert.details');
Route::GET('/today-news',TodayNews::class)->name('today-news');
Route::GET('/today-news/details/{slug}',TodayNewsDetail::class)->name('today_news.details');
Route::GET('/contact',Contact::class)->name('contact');
Route::GET('/franchise-directory', FranchiseDirectory::class)->name('franchise-directory');
Route::GET('/retail-directory', RetailDirectory::class)->name('retail-directory');
Route::GET('/retail-details/{slug}',RetailDetails::class)->name('retail-details');
Route::GET('/franchise-details/{slug}',FranchiseDetails::class)->name('franchise-details');
Route::GET('/events',Event::class)->name('events');

Route::GET('/admin/master/login',Login::class)->name('admin.login');

Route::middleware(['role:admin'])->group(function () {
    Route::GET('/dashboard',Dashboard::class)->name('admin.dashboard');

    Route::GET('/admin/today_news',NewsIndex::class)->name('admin.today_news');
    Route::GET('/admin/today_news/add',NewsForm::class)->name('admin.today_news.add');
    Route::GET('/admin/today_news/edit/{slug}',NewsForm::class)->name('admin.today_news.edit');

    Route::GET('/admin/retail-directory',RetailIndex::class)->name('admin.retail');
    Route::GET('/admin/retail-directory/add',RetailForm::class)->name('admin.retail.add');
    Route::GET('/admin/retail/edit/{slug}',RetailForm::class)->name('admin.retail.edit');

    Route::GET('/admin/franchise-directory',FranchiseIndex::class)->name('admin.franchise');
    Route::GET('/admin/franchise-directory/add',FranchiseForm::class)->name('admin.franchise.add');
    Route::GET('/admin/franchise/edit/{slug}',FranchiseForm::class)->name('admin.franchise.edit');

    Route::GET('/admin/expert',WidgetExpert::class)->name('admin.expert');
    Route::GET('/admin/expert/add',ExpertForm::class)->name('admin.experts.add');
    Route::GET('/admin/expert/edit/{slug}',ExpertForm::class)->name('admin.experts.edit');

    Route::GET('/admin/ask_expert',ExpertIndex::class)->name('admin.ask_expert');
    Route::GET('/admin/ask_expert/add',ExpertExpertForm::class)->name('admin.ask_expert.add');
    Route::GET('/admin/ask_expert/edit/{slug}',ExpertExpertForm::class)->name('admin.ask_expert.edit');

    Route::GET('/admin/event',EventIndex::class)->name('admin.event');
    Route::GET('/admin/event/add',EventForm::class)->name('admin.event.add');
    Route::GET('/admin/event/edit/{slug}',EventForm::class)->name('admin.event.edit');


    Route::GET('/admin/franchise-week',FranchiseWeek::class)->name('admin.franchise-week');
    Route::GET('/admin/franchise-week/edit/{slug}',FranchiseWeek::class)->name('admin.franchise-week.edit');

    Route::GET('/admin/banner',BannerIndex::class)->name('admin.banner');
    Route::GET('/admin/banner/add',BannerForm::class)->name('admin.banner.add');
    Route::GET('/admin/banner/edit/{id}',BannerForm::class)->name('admin.banner.edit');

    Route::GET('/admin/slider',SliderIndex::class)->name('admin.slider');
    Route::GET('/admin/slider/add',SliderForm::class)->name('admin.slider.add');
    Route::GET('/admin/slider/edit/{id}',SliderForm::class)->name('admin.slider.edit');

    Route::GET('/admin/brand',BrandIndex::class)->name('admin.brand');
    Route::GET('/admin/brand/add',BrandForm::class)->name('admin.brand.add');
    Route::GET('/admin/brand/edit/{id}',BrandForm::class)->name('admin.brand.edit');

    Route::GET('/admin/footer',FooterIndex::class)->name('admin.footer');
    Route::GET('/admin/footer/add',FooterForm::class)->name('admin.footer.add');
    Route::GET('/admin/footer/edit/{id}',FooterForm::class)->name('admin.footer.edit');

    Route::GET('/admin/users',User::class)->name('admin.users');
    Route::GET('/admin/subscribes',Subscribe::class)->name('admin.subscribes');





});
