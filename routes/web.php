<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//    return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

use App\Models\Club;
use App\Models\Event;


Route::get('/', function () {
    return view('welcome', [
        'clubs' => Club::all(),
        'events' => Event::all()
    ]);
 });

use App\Http\Controllers\UserController;

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
});


Route::view('/register','register');
Route::post('/register',[UserController::class,'register']);

Route::get('/clubs', function(){
    return view('clubs', [
        'clubs' => Club::all()
    ]);
});

Route::get('/events', function(){
    return view('events', ['events' => Event::all()]);
});

Route::get('/about', function(){
    return view('about');
});

use App\Http\Controllers\EventController;
use App\Http\Controllers\ClubController;
Route::get('/detail/clubs/{id}',[ClubController::class,'detail']);
Route::get('/detail/events/{id}',[EventController::class,'detail']);
Route::post('/enroll', [EventController::class,'enroll']);
Route::get('/enrolled',[EventController::class,'myevents']);
Route::get('/disenroll/{id}', [EventController::class,'disenroll']);

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';
