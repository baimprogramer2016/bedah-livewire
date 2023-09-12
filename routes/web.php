<?php

use App\Http\Livewire\Action;
use App\Http\Livewire\Belanja;
use App\Http\Livewire\Counter;
use App\Http\Livewire\Event;
use App\Http\Livewire\LifeCycle;
use App\Http\Livewire\Nesting;
use App\Http\Livewire\Properti;
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

Route::get('/', Counter::class);
Route::get('/counter', Counter::class);
Route::get('/properti', Properti::class);
Route::get('/action', Action::class);
Route::get('/event', Event::class);
Route::get('/life-cycle', LifeCycle::class);
Route::get('/nesting', Nesting::class);
Route::get('/belanja', Belanja::class);
