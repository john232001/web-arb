<?php

use App\Http\Controllers\ArbController;
use App\Http\Controllers\AspController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AwardtitleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Form18Controller;
use App\Http\Controllers\Form1Controller;
use App\Http\Controllers\Form20Controller;
use App\Http\Controllers\Form2Controller;
use App\Http\Controllers\Form37Controller;
use App\Http\Controllers\Form3Controller;
use App\Http\Controllers\Form42Controller;
use App\Http\Controllers\Form46Controller;
use App\Http\Controllers\Form47Controller;
use App\Http\Controllers\Form49Controller;
use App\Http\Controllers\Form51Controller;
use App\Http\Controllers\Form52BController;
use App\Http\Controllers\Form53Controller;
use App\Http\Controllers\Form54Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandholdingController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ValuationController;
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

//Homepage Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/darleaders', [HomeController::class, 'darleaders'])->name('darleaders');
Route::get('/services', [HomeController::class, 'services'])->name('services');
//Authentication Routes
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post_register', [AuthController::class, 'postRegister'])->name('post_register');
Route::post('post_login', [AuthController::class, 'postLogin'])->name('post_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Landholdings Routes
Route::get('landholding', [LandholdingController::class, 'index'])->name('landholding');
Route::post('landholding/store', [LandholdingController::class, 'store'])->name('landholding_store');
Route::put('landholding_update/{id}', [LandholdingController::class, 'update'])->name('landholding_update');
Route::get('landholding_delete/{id}', [LandholdingController::class, 'delete'])->name('landholding_delete');
Route::get('landholding_download/{id}', [LandholdingController::class, 'download'])->name('landholding_download');
Route::get('landholding/view/{id}', [LandholdingController::class, 'show'])->name('landholding_view');
// Arb`s Routes
Route::post('arb/store', [ArbController::class, 'store'])->name('arb_store');
Route::put('arb/update/{id}', [ArbController::class, 'update'])->name('arb_update');
Route::get('arb/delete/{id}', [ArbController::class, 'delete'])->name('arb_delete');
// Lots Routes
Route::post('lot/store', [LotController::class, 'store'])->name('lot_store');
Route::put('lot/update/{id}', [LotController::class, 'update'])->name('lot_update');
Route::get('lot/delete/{id}', [LotController::class, 'delete'])->name('lot_delete');
// ASP`s Routes
Route::post('asp/store', [AspController::class, 'store'])->name('asp_store');
Route::put('asp/update/{id}', [AspController::class, 'update'])->name('asp_update');
Route::get('asp/delete/{id}', [AspController::class, 'delete'])->name('asp_delete');
// Valuations Routes
Route::post('valuation/store', [ValuationController::class, 'store'])->name('valuation_store');
Route::put('valuation/update/{id}', [ValuationController::class, 'update'])->name('valuation_update');
Route::get('valuation/delete/{id}', [ValuationController::class, 'delete'])->name('valuation_delete');
// AwardTitle Routes
Route::post('awardtitle/store', [AwardtitleController::class, 'store'])->name('awardtitle_store');
Route::put('awardtitle/update/{id}', [AwardtitleController::class, 'update'])->name('awardtitle_update');
Route::get('awardtitle/delete/{id}', [AwardtitleController::class, 'delete'])->name('awardtitle_delete');
//Form No. 1 Routes
Route::get('form1/{id}', [Form1Controller::class, 'selectform1'])->name('form1');
Route::get('form1/generateform/{id}', [Form1Controller::class, 'generateform'])->name('form1_generate');
//Form No. 2 Routes
Route::get('form2/{id}', [Form2Controller::class, 'selectform2'])->name('form2');
Route::get('form2/generateform/{id}', [Form2Controller::class, 'generateform'])->name('form2_generate');
//Form No. 3 Routes
Route::get('form3/{id}', [Form3Controller::class, 'selectform3'])->name('form3');
Route::get('form3/generateform/{id}', [Form3Controller::class, 'generateform'])->name('form3_generate');
//Form No. 18 Routes
Route::get('form18/{id}', [Form18Controller::class, 'selectform18'])->name('form18');
Route::get('form18/generateform/{id}', [Form18Controller::class, 'generateform'])->name('form18_generate');
//Form No. 20 Routes
Route::get('form20/{id}', [Form20Controller::class, 'selectform20'])->name('form20');
Route::get('form20/generateform/{id}', [Form20Controller::class, 'generateform'])->name('form20_generate');
//Form No. 42 Routes
Route::get('form42/{id}', [Form42Controller::class, 'selectform42'])->name('form42');
Route::get('form42/generateform/{id}', [Form42Controller::class, 'generateform'])->name('form42_generate');
//Form No. 46 Routes
Route::get('form46/{id}', [Form46Controller::class, 'selectform46'])->name('form46');
Route::get('form46/generateform/{id}', [Form46Controller::class, 'generateform'])->name('form46_generate');
//Form No. 49 Routes
Route::get('form49/{id}', [Form49Controller::class, 'selectform49'])->name('form49');
Route::get('form49/generateform/{id}', [Form49Controller::class, 'generateform'])->name('form49_generate');
//Form No. 37 Routes
Route::get('form37/{id}', [Form37Controller::class, 'selectform37'])->name('form37');
Route::get('form37/generateform/{id}', [Form37Controller::class, 'generateform'])->name('form37_generate');
//Form No. 47 Routes
Route::get('form47/{id}', [Form47Controller::class, 'selectform47'])->name('form47');
Route::get('form47/generateform/{id}', [Form47Controller::class, 'generateform'])->name('form47_generate');
//Form No. 54 Routes
Route::get('form54/{id}', [Form54Controller::class, 'selectform54'])->name('form54');
Route::get('form54/generateform/{id}', [Form54Controller::class, 'generateform'])->name('form54_generate');
//Form No. 51 Routes
Route::get('form51/{id}', [Form51Controller::class, 'selectform51'])->name('form51');
Route::get('form51/generateform/{id}', [Form51Controller::class, 'generateform'])->name('form51_generate');
//Form No. 52B Routes
Route::get('form52B/{id}', [Form52BController::class, 'selectform52B'])->name('form52B');
Route::get('form52B/generateform/{id}', [Form52BController::class, 'generateform'])->name('form52B_generate');
//Form No. 53 Routes
Route::get('form53/{id}', [Form53Controller::class, 'selectform53'])->name('form53');
Route::get('form53/generateform/{id}', [Form53Controller::class, 'generateform'])->name('form53_generate');
//Manage Officers
Route::get('officers', [OfficerController::class, 'index'])->name('officers');
Route::post('officer/store', [OfficerController::class, 'store'])->name('officer_store');
Route::put('officer/update/{id}', [OfficerController::class, 'update'])->name('officer_update');
Route::get('officer/delete/{id}', [OfficerController::class, 'delete'])->name('officer_delete');
