<?php


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

function activeMenu($uri = '')
{
    $active = '';
    if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
        $active = 'active';
    }
    return $active;
}

Route::get('/', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->get('', function () {
//     // Route::get("/rides/search/{name}", [RidesController::class, 'search']);
//     // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//     });

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/case-form', [App\Http\Controllers\CaseController::class, 'addCaseForm']);
    Route::post('/case-form', [App\Http\Controllers\CaseController::class, 'addCase']);

    Route::get('/cases', [App\Http\Controllers\CaseController::class, 'index']);
    Route::post('/cases', [App\Http\Controllers\CaseController::class, 'divisionCases']);

// search route
    Route::get('/search', [App\Http\Controllers\CaseController::class, 'searchCases']);

    Route::get('/case/{id}/edit', [App\Http\Controllers\CaseController::class, 'edit']);
    Route::get('/case/{id}', [App\Http\Controllers\CaseController::class, 'show']);
    Route::put('/case/{id}/edit', [App\Http\Controllers\CaseController::class, 'update']);

});
