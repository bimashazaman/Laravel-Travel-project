<?php

use App\Http\Controllers\TourCategoryController;
use App\Http\Controllers\TourController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/check', [TourController::class, 'index']);

//--------- Tour categgories ----------
Route::resource("/tour/category", TourCategoryController::class);

//-------- Tour --------------
Route::resource("/tour", TourController::class);

//-------- Tour Highlight ----------
Route::post("/tour/highlight",[TourController::class,"addTourHighlights"]);
Route::delete("/tour/highlight/{id}",[TourController::class,"deleteHighlights"]);

//-------- Tour Facility -----------
Route::post("/tour/facility",[TourController::class,"addTourFacility"]);
Route::delete("/tour/facility/{id}",[TourController::class,"deleteTourFacility"]);

//-------- Tour Program ------------
Route::post("/tour/program",[TourController::class,"addTourProgram"]);
Route::delete("/tour/program/{id}",[TourController::class,"deleteTourProgram"]);

//------- Tour Images ------------
