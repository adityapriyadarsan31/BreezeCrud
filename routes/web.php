<?php

use Illuminate\Support\Facades\Route;
use App\Models\Farzi;
use Illuminate\Http\Request;
use App\Http\Controllers\FarziController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/contacts',function(Request $request){
	$contacts = Farzi::all();
	return view('contacts',['contacts'=>$contacts,'request'=>$request]);
})->middleware(['auth'])->name('contacts');


Route::post('/create',[FarziController::class,'create'])
	->middleware(['auth'])->name('create');

Route::post('/edit',[FarziController::class,'edit'])
	->middleware(['auth'])->name('edit');

Route::post('/delete',[FarziController::class,'delete'])
	->middleware(['auth'])->name('delete');

Route::post('/update',[FarziController::class,'update'])
	->middleware(['auth'])->name('update');

require __DIR__.'/auth.php';
