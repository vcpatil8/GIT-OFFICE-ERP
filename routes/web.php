<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
   //$users = DB::select("select * FROM users");
    //$users = DB::insert("INSERT into users(name, email, password) values(?,?,?)", ['Srihari', 'srihari@gmail.com', '12345']);
    //$users = User::where('id',1)->get();
    //dd($users);
});
Route::get('/sidebar', function () {
    return view('layouts.sidebar');
   //$users = DB::select("select * FROM users");
    //$users = DB::insert("INSERT into users(name, email, password) values(?,?,?)", ['Srihari', 'srihari@gmail.com', '12345']);
    //$users = User::where('id',1)->get();
    //dd($users);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');

Route::get('/StudentReg', function () {
    return view('StudentReg');
})->middleware(['auth', 'verified'])->name('StudentReg');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
