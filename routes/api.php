<?php

use App\Http\Controllers\Api\AreaPlanController;
use App\Http\Controllers\Api\AreasController;
use App\Http\Controllers\Api\CompetencesController;
use App\Http\Controllers\Api\GradesController;
use App\Http\Controllers\Api\IndicatorsController;
use App\Http\Controllers\Api\TopicsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('area-plan',AreaPlanController::class);
Route::get('area-plan/{area}/indicators', [IndicatorsController::class, 'index'])->name('indicators.index');
Route::get('area-plan/{area}/competences', [CompetencesController::class, 'index'])->name('competences.index');
Route::get('area-plan/{area}/topics', [TopicsController::class, 'index'])->name('topics.index');
Route::get('grades/{grade}/areas', [AreasController::class, 'index'])->name('areas.index');
Route::get('grades', [GradesController::class, 'index'])->name('grades.index');
Route::get('grades/{grade}', [GradesController::class, 'show'])->name('grades.show');
Route::get('areas/{area}', [AreasController::class, 'show'])->name('areas.show');
Route::post('area-plan-clone',[AreaPlanController::class, 'clone']);

