<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;
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

//any use korle jekono action korte parbe---> get, put etc
// Route::any('/about', function () {
//     return view('about');
// });

//Route::get('/about', function () {
 //   return redirect('/contact'); onno page e redirect kora



//  return view('about');

// })->name('about.us');



// Route::get('/about', function (Request $request) { //token generate
//     $token = $request->session()->token();

//    // $token = csrf_token();
//     dd($token);
//     // ...
// })->name('about.us');




// Route::get('/contact', function(){
//     return view('contact');
// })->name('contact.us');

// Route::match( ['get', 'post'] ,'/about', function () {
//     return view('about');
// });

//value pass when move one page to another page
// Route::get('/contact/{roll}', function ($roll) {
//     return "my roll is $roll";
// });

Route::get('/country', function(){
    return view('country');
})->middleware('man');


//controller design
//___laravel_7
//Route::get('/contact', 'FirstController@index')->name('contact.us');

//__laravel__8
Route::get('/contact', [FirstController::class, 'index'])->name('contact.us');

Route::get('/about', [FirstController::class, 'indexAbout'])->name('about.us');

Route::get('/uiu', [FirstController::class, 'aboutUiu'])->name('uiu.us');

Route::get('/faculty', [FirstController::class, 'faculty'])->name('faculty.us');


Route::post('/student/store', [FirstController::class, 'studentStore'])->name('student.store');

//__invoke route
Route::get('/test', SecondController::class);


Route::get('/game/games', [FirstController::class, 'game'])->name('game');


Route::get('/laravel', [FirstController::class, 'laravel'])->name('laravel');



Route::post('/store/contact', [FirstController::class, 'store'])->name('store.contact');



//login er code practice test

Route::get('/testss', function(Request $request){
    Log::info('this is your age'.rand(1,30));
    return redirect()->to('/');
} );




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
