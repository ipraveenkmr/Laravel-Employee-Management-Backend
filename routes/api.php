<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeDetailsController;
use App\Http\Controllers\AccountDetailsController;
use App\Http\Controllers\ReferenceDetailsController;
use App\Http\Controllers\OffboardingDetailsController;


Route::apiResource('employees', EmployeeDetailsController::class);
Route::apiResource('employee-accounts', AccountDetailsController::class)->only(['store', 'update']);
Route::apiResource('employee-references', ReferenceDetailsController::class)->only(['store', 'update', 'destroy']);
Route::apiResource('employee-offboardings', OffboardingDetailsController::class)->only(['store', 'update']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
