<?php

use App\Http\Controllers\Api\AreaPlanController;
use App\Http\Controllers\Api\CompetencesController;
use App\Http\Controllers\Api\IndicatorsController;
use App\Http\Controllers\Api\TopicsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('area-plan',AreaPlanController::class);
Route::get('indicators', [IndicatorsController::class, 'index'])->name('indicators.index');
Route::get('competences', [CompetencesController::class, 'index'])->name('competences.index');
Route::get('topics', [TopicsController::class, 'index'])->name('topics.index');


