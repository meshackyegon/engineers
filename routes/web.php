<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
  return view('welcome');
})->name('home');

// Public informational pages (KPA-like structure adapted)
Route::view('about/who-we-are', 'pages.about.who-we-are')->name('about.who');
Route::view('about/branches', 'pages.about.branches')->name('about.branches');
Route::view('about/leadership-governance', 'pages.about.leadership')->name('about.leadership');
Route::view('about/council-members', 'pages.about.council')->name('about.council');
Route::view('about/secretariat', 'pages.about.secretariat')->name('about.secretariat');

Route::view('membership/become-a-member', 'pages.membership.become')->name('membership.become');
Route::view('membership/certified-members', 'pages.membership.certified')->name('membership.certified');
Route::view('membership/members-portal', 'pages.membership.portal')->name('membership.portal');

Route::view('media/news', 'pages.media.news')->name('media.news');
Route::view('media/events', 'pages.media.events')->name('media.events');
Route::view('media/memos', 'pages.media.memos')->name('media.memos');
Route::view('media/gallery', 'pages.media.gallery')->name('media.gallery');
Route::view('media/press-releases', 'pages.media.press')->name('media.press');
Route::view('media/journals', 'pages.media.journals')->name('media.journals');
Route::view('media/video-centre', 'pages.media.videos')->name('media.videos');

Route::view('connect/jobs', 'pages.connect.jobs')->name('connect.jobs');
Route::view('connect/post-a-job', 'pages.connect.postjob')->name('connect.postjob');
Route::view('connect/employer-dashboard', 'pages.connect.employer')->name('connect.employer');

Route::view('resources/enquiries', 'pages.resources.enquiries')->name('resources.enquiries');
Route::view('resources/downloads', 'pages.resources.downloads')->name('resources.downloads');
Route::view('resources/partners-affiliates', 'pages.resources.partners')->name('resources.partners');
Route::view('contact', 'pages.resources.contact')->name('contact');

Route::view('dashboard', 'dashboard')
  ->middleware(['auth', 'verified'])
  ->name('dashboard');

Route::middleware(['auth'])->group(function () {
  Route::redirect('settings', 'settings/profile');

  Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
  Volt::route('settings/password', 'settings.password')->name('settings.password');
  
  // Membership payments
  Route::get('payments', [App\Http\Controllers\PaymentsController::class, 'index'])->name('payments.index');
  Route::post('payments/mpesa', [App\Http\Controllers\PaymentsController::class, 'mpesa'])->name('payments.mpesa');
});

require __DIR__ . '/auth.php';
