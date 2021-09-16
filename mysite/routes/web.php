<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/test', [\App\Http\Controllers\MainController::class, 'test'])->name('test');
Route::get('/', [\App\Http\Controllers\MainController::class, 'main'])->name('main');

Route::get('/add-organization', [\App\Http\Controllers\OrganisationsController::class, 'addOrganization'])
    ->name('addOrganization');
Route::post('/add-organization/check', [\App\Http\Controllers\OrganisationsController::class, 'addOrganizationCheck'])
    ->name('addOrganizationCheck');


Route::get('/authorization', [\App\Http\Controllers\AutController::class, 'authorization'])
    ->name('authorization');
Route::post('/authorization/check', [\App\Http\Controllers\AutController::class, 'authorizationCheck'])
    ->name('authorizationCheck');

Route::get('/registration', [\App\Http\Controllers\AutController::class, 'registration'])
    ->name('registration');
Route::post('/registration/check', [\App\Http\Controllers\AutController::class, 'registrationCheck'])
    ->name('registrationCheck');

Route::get('/list-reviews', [\App\Http\Controllers\ReviewsController::class, 'listReviews'])
    ->name('listReviews');

Route::get('/add-review', [\App\Http\Controllers\ReviewsController::class, 'addReview'])
    ->name('addReview');
Route::post('/add-review/check', [\App\Http\Controllers\ReviewsController::class, 'addReviewCheck'])
    ->name('addReviewCheck');

