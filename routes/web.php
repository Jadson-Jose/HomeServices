<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Costumer\CostumerDashboardComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');

//  For Costumer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/costumer/dashboard', CostumerDashboardComponent::class)->name('costumer.dashboard');
 });


// For Service Provider
Route::middleware(['auth:sanctum', 'verified', 'authsprovider'])->group(function () {
    Route::get('/sprovider/dashboard', SproviderDashboardComponent::class)->name('sprovider.dashboard');
 });

// for Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
   Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
