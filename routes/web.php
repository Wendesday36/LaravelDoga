<?php

use App\Http\Controllers\ParticipateContoller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/participates', [ParticipateContoller::class,'index']);
Route::get('/api/participates/{id}', [ParticipateContoller::class,'show']);
Route::post('/api/participates', [ParticipateContoller::class,'store']);
Route::put('/api/participates/{id}', [ParticipateContoller::class,'update']);
Route::delete('/api/participates/{id}', [ParticipateContoller::class,'destroy']);



//view
Route::get('/participates/list', [ParticipateContoller::class, 'listView']);
