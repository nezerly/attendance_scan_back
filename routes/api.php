<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('attendance', [AttendanceController::class, 'index'])->name('allAttendance');
Route::get('attendance/index/{student_index}', [AttendanceController::class, 'showByIndex'])->name('indexAttendance');
Route::get('attendance/class/{student_class}', [AttendanceController::class, 'showByClass'])->name('classAttendance');
//Route::get('attendance/date/{student_date}', [AttendanceController::class, 'showByDate'])->name('dateAttendance');



Route::post('attendance', [AttendanceController::class, 'store'])->name('storeAttendance');