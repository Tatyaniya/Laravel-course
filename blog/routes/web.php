<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/posts', [PostController::class, 'index']);

Route::resource('posts', PostController::class);

Route::get('/', function () {
  return view('welcome');
});

Route::get('/welcome', function() {
  return 'Welcome to our website!';
});

Route::get('/welcome/{name}', function($name) {
  return "Welcome, $name!";
  return 'Welcome, guest';
});

Route::get('/welcome/{name}/{age}', function($name, $age) {
  return "Welcome, $name. You are $age years old.";
});

Route::get('age/{age}', function($age){
  ddd($age);
  return "You $age";
})->whereNumber('age');

Route::get('/search', function() {
  $q = request()->query('q');
  return $q;
});

Route::get('/not-found', function() {
  return response("<h1>Hello World</h1>", 200)
    ->header("X-custom-header", "Custom Value");
});


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
