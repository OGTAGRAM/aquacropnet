<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\KomenController;
use App\Http\Controllers\MasukanController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Models\Content;
use Illuminate\Contracts\Cache\Store;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/kabar', function () {
    return view('kabar');
});

Route::get('/kabarr', function () {
    return view('kabarr');
});

Route::get('/kiat', function () {
    return view('kiat');
});

Route::get('/kiatt', function () {
    return view('kiatt');
});

Route::get('/vidio', function () {
    return view('video');
});

Route::get('/vidioo', function () {
    return view('videoo');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/storee', function () {
    return view('storee');
});

Route::get('/pisang', function () {
    return view('kabar/pisang');
});

Route::get('/kerbau', function () {
    return view('video/kerbau');
});

Route::post('/masukans', [MasukanController::class, 'store'])
->middleware(['auth', 'verified'])
->name('masukans.store');

Route::post('/komens', [KomenController::class, 'store'])
->middleware(['auth', 'verified'])
->name('komens.store'); 

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/pisangg', [KomenController::class, 'index'])
->middleware(['auth', 'verified'])
->name('pisangg');

Route::get('/komens/{id}/edit', [KomenController::class, 'edit'])
->middleware(['auth', 'verified'])
->name('komens.edit');
   
Route::put('/komens/{id}', [KomenController::class, 'update'])
->middleware(['auth', 'verified'])
->name('komens.update');

Route::delete('/komens/{id}', [KomenController::class, 'destroy'])
->middleware(['auth', 'verified'])
->name('komens.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('komens', KomenController::class)
->except(['create'])
->middleware('auth', 'verified');

Route::post('komens/{komen}/message', [MessageController::class, 'store'])
->middleware('auth', 'verified')
->name('messages.store');

Route::get('komens/{komen}/messages/{message}/edit', [MessageController::class, 'edit'])
->middleware('auth', 'verified')
->name('messages.edit');

Route::put('komens/{komen}/messages/{message}', [MessageController::class, 'update'])
->middleware('auth', 'verified')
->name('messages.update');

Route::delete('komens/{komen}/messages/{message}', [MessageController::class, 'destroy'])
->middleware('auth', 'verified')
->name('messages.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
