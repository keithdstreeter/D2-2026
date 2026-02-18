<?php

use App\Livewire\Auth\Check;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Camera\Camera;
use App\Livewire\Camera\Gallery;
use App\Livewire\Camera\Video;
use App\Livewire\Dialog\Alert;
use App\Livewire\Dialog\Toast;
use App\Livewire\Home;
use App\Livewire\News;
use App\Livewire\Photopick;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/', Check::class)->name('auth-check');

Route::middleware(['mobile.auth'])->group(function () {
    Route::get('/home', Home::class)->name('home');
    Route::get('/news', News::class)->lazy()->name('news');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/photopick', Photopick::class)->name('photopick');

    Route::group(['prefix' => 'camera'], function () {
        Route::get('/gallery', Gallery::class)->name('camera.gallery');
        Route::get('/camera', Camera::class)->name('camera.camera');
        Route::get('/video', Video::class)->name('camera.video');
    });

    Route::group(['prefix' => 'dialog'], function () {
        Route::get('/alert', Alert::class)->name('dialog.alert');
        Route::get('/toast', Toast::class)->name('dialog.toast');
    });
});
