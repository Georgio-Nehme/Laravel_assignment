<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\palindromeController;
use App\Http\Controllers\secondsCounter;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/palindrome', [palindromeController::class, 'countPalindromes'])->name("count-palindromes");

Route::get('/secondsCounter', [secondsCounter::class, 'countSeconds'])->name("count-seconds");