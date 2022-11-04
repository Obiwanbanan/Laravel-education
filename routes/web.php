<?php

use App\Models\Client;
use App\Models\Site;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AboutUsController;

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

// ['middleware' => 'auth']



Route::group(['middleware' => 'auth'], function() {

    Route::get('/info', [ClientController::class, 'index'])->name('info.index');
//    Route::get('/', function () {
//        $sites = Site::all();
//        $clients = Client::all();
//        return view('main',['sites' => $sites, 'clients' => $clients]);
//    });

    Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::post('/feedback', [FeedbackController::class, 'send'])->name('feedback.send');
    Route::get('/aboutUs', [AboutUsController::class, 'index'])->name('aboutUs.index');




});


Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
