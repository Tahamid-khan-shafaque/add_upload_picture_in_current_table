<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\FormController;
 use App\Http\Controllers\UserController;
 use App\Http\Controllers\DisplayController;
 use App\Http\Controllers\DataController;
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
    return view('auth.login');
});

route::get('/home',[HomeController::class,'index'])->name('home');


#form
Route::get('/form', function () {
    return view('form');
});

// Route to handle form submission
Route::post('/submit-form', [FormController::class, 'submit'])->name('submit-form');
#needed 


#seee

// Route to handle form submission
Route::post('/submit-form', [FormController::class, 'submit'])->name('submit-form');

// Route for success page
Route::get('/success', function () {
    return view('success');
})->name('success');
#seee

#anther route for anchortag
Route::get('display-data', function () {
    return view('data-display');
})->name('display');
#anther route for anchortag

Route::get('form', [UserController::class, 'addUser'])->name('form');
#display data

Route::get('/display-data', [FormController::class, 'displayData'])->name('display-data');
#---------part 2 : display data



// Route for displaying the insert form
Route::get('/insert', function () {
    return view('insert');
});

// Route for handling the form submission
Route::post('/insert', [DataController::class, 'insertData'])->name('insertData');

// Route for displaying the data
Route::get('/show', [DataController::class, 'showData'])->name('showData');

#__________________________________________________needed
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






