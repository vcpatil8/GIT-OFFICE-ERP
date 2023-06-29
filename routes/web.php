<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    //Route::resource('/ticket', TicketController::class);
    Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
    Route::post('/ticket/create', [TicketController::class, 'store'])->name('ticket.store');
    Route::get("/ticket/index", [TicketController::class, 'index'])->name('ticket.index');
    Route::get("/ticket", [TicketController::class, 'index'])->name('ticket');
    Route::get('/ticket/show/{ticket}', [TicketController::class, 'show'])->name('ticket.show');
    Route::delete('ticket/destory/{ticket}', [TicketController::class, 'destroy'])->name('ticket.destroy');
    Route::get('/ticket/edit/{ticket}', [TicketController::class, 'edit'])->name('ticket.edit');
    Route::patch('/ticket/update/{ticket}', [TicketController::class, 'update'])->name('ticket.update');
});

require __DIR__ . '/auth.php';
