<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/home', function () {
    return view('home');
})->middleware('auth');



https://github.com/RacmanMontes/LaravelAct3/pull/3/conflict?name=routes%252Fweb.php&ancestor_oid=ad7b9dbd8f103e8eedd4337c4fe0eb387252ace5&base_oid=8e55fd3f80004babb31fd836649892c4abc2bc49&head_oid=290871264bfae868a714f9eecadf40fbe5669e8e
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home/montes', function () {
    return view('montes');
})->name('montes');

Route::get('/cv', function () {
    return view('cv');
})->name('cv');

Route::get('/sumbad', function () {
    return view('sumbad');
})->name('sumbad');

Route::get('/manzano', function () {
    return view('manzano');
})->name('manzano');

Route::get('/lagrana', function () {
    return view('lagrana');
})->name('lagrana');


