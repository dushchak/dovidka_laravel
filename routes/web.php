<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomepageController;

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
//     return view('welcome');
// });

Route::get('/', [HomepageController::class, 'index']); /// its Route for Laravel8 - index Action 



/*
// в Laravel 8, вместо return redirect()->route(\'review\');
// делаем:
// return redirect(\'review\');

*/