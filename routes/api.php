<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request; 

use App\Http\Controllers\LeadController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Uncomment this if needed for authenticated user retrieval
 //Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   //  return $request->user();
 //});

 Route::middleware(['api', 'throttle:10,1'])
    ->post('/leads', [LeadController::class, 'store'])
    ->name('leads.store');