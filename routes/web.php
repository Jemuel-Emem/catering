<?php
use App\Http\Controllers\AuthController;
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

Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


    Route::middleware([

        ])->group(function () {
             Route::get('/dashboard', function () {
               if (auth()->user()->role == 1) {
                return redirect()->route('Admindashboard');
               }

               else{
                return redirect()->route('user-dashboard');
               }
             })->name('userdashboard');

        });

        Route::prefix('admin')->middleware('admin')->group(function(){
            Route::get('/Admindashboard', function(){
                return view('admin.index');
            })->name('Admindashboard');


         });

         Route::prefix('user')->middleware('user')->group(function(){
            Route::get('/dashboard', function(){
                   return view('user.index');
               })->name('user-dashboard');




        });


        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
require __DIR__.'/auth.php';
