<?php

use App\Http\Controllers\Api\ActivitiesCreativeAgendaCloneController;
use App\Http\Controllers\Api\AreaPlanController;
use App\Http\Controllers\Api\AreasController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CheckController;
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
Route::get('grades/{grade}/areas/{area:id}/area-plan', [AreaPlanController::class, 'indexByGrade'])->name('grades.areas.area_plan.index');
Route::get('grades', [GradesController::class, 'index'])->name('grades.index');
Route::get('grades/{grade}', [GradesController::class, 'show'])->name('grades.show');
Route::get('areas/{area}', [AreasController::class, 'show'])->name('areas.show');
Route::post('area-plan-clone/{plan}',[AreaPlanController::class, 'clone']);
Route::patch('check-activitie/{activitie}', [CheckController::class, 'checkActivity'])->name('activitie.check');
Route::patch('check-task/{task}', [CheckController::class, 'checkTask'])->name('task.check');
Route::patch('area-plan-clone/creative-agenda/{activitie}', [ActivitiesCreativeAgendaCloneController::class, 'UpdateDescription'])->name('change.activitie.description');

Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login.api');
    Route::post('/register', [AuthController::class, 'register'])->name('register.api');
});
