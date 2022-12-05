<?php

use App\Http\Controllers\AliiController;
use App\Http\Controllers\ClassProjectController;
use App\Http\Controllers\ClasssController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CostumersController;
use App\Http\Controllers\GafarController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\OdaiController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoollController;
use App\Http\Controllers\SchoolProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudenttController;
use App\Http\Controllers\UsernameController;
use App\Models\gafar;
use App\Models\Hospital;
use App\Models\School;
use App\Models\Student_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentProjectController;

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

// Route::post('/al',[StudentController::class,'store']);
// Route::get('users', [StudentController::class,'index']);
// Route::get('hospital', [HospitalController::class,'show']);

// Route::post('hospital', [HospitalController::class, 'store']);
// // Route::get('hospital', [HospitalController::class,'index']);
// Route::delete('hospital',[HospitalController::class,'destroy']);
// Route::put('hospital',[HospitalController::class,'update']);
// Route::get('school',[SchoolController::class,'result']);


//hasmany relation
// Route::post('class_project',[ClassProjectController::class,'store']);
Route::post('classs',[ClasssController::class,'store']);
Route::post('schooll',[SchoollController::class,'store']);
Route::post('studentt',[StudenttController::class,'store']);
Route::get('studentt',[StudenttController::class,'show']);
Route::get('classs',[ClasssController::class,'index']);
Route::get('studentt',[StudenttController::class,'index']);
Route::get('schooll',[SchoollController::class,'index']);
Route::get('schooll/students',[SchoollController::class,'studentsSchool']);
Route::post('Costumer',[CostumersController::class,'store']);
// Route::get('student_project',[StudentProjectController::class,'show']);
// //schoolprojet
// Route::get('school_project',[SchoolProjectController::class,'show']);
// Route::post('username',[UsernameController::class,'store']);

Route::post('odai',[OdaiController::class,'store']);
Route::post('alii', [AliiController::class, 'store']);
Route::post('gafar', [GafarController::class, 'Store']);
// Route::get('username',[UsernameController::class,'show']);
// Route::post('username',[UsernameController::class,'update']);
