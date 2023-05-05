<?php

use App\Http\Controllers\Api\ActivitiesCreativeAgendaCloneController;
use App\Http\Controllers\Api\AreaPlanController;
use App\Http\Controllers\Api\AreaPlanCloneController;
use App\Http\Controllers\Api\AreasController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CheckController;
use App\Http\Controllers\Api\CompetencesController;
use App\Http\Controllers\Api\GradesController;
use App\Http\Controllers\Api\GroupsController;
use App\Http\Controllers\Api\IndicatorsController;
use App\Http\Controllers\Api\ObjetivesController;
use App\Http\Controllers\Api\TeachersController;
use App\Http\Controllers\Api\TopicsController;
use App\Http\Controllers\Api\SubjectController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'cors'])->group(function () {
    Route::apiResource('area-plan',AreaPlanController::class)->except('store');
    Route::post('area/{area}/area-plan', [AreaPlanController::class, 'store'])->name('area-plan.store');
    Route::get('area-plan/{area}/indicators', [IndicatorsController::class, 'index'])->name('indicators.index');
    Route::get('area-plan/{area}/competences', [CompetencesController::class, 'index'])->name('competences.index');
    Route::get('area-plan/{area}/topics', [TopicsController::class, 'index'])->name('topics.index');
    Route::get('area-plan/{area}/objetives', [ObjetivesController::class, 'index'])->name('objetives.index');
    Route::get('grades/{grade}/areas', [AreasController::class, 'index'])->name('areas.index');
    Route::post('grades/{grade}/areas', [AreasController::class, 'store'])->name('areas.post');
    Route::patch('grades/{grade}/areas/{area:id}', [AreasController::class, 'update'])->name('areas.update');
    Route::delete('grades/{grade}/areas/{area:id}', [AreasController::class, 'destroy'])->name('areas.delete');
    Route::get('grades/{grade}/areas/{area:id}/area-plan', [AreaPlanController::class, 'indexByGrade'])->name('grades.areas.area_plan.index');
    Route::get('grades', [GradesController::class, 'index'])->name('grades.index');
    Route::get('grades/{grade}/subjects', [SubjectController::class, 'index'])->name('subjects.index');
    Route::post('grades/{grade}/subjects', [SubjectController::class, 'store'])->name('subjects.store');
    Route::patch('subjects/{subject}', [SubjectController::class, 'update'])->name('subjects.update');
    Route::get('subjects/{subject}', [SubjectController::class, 'show'])->name('subjects.show');
    Route::delete('subjects/{subject}', [SubjectController::class, 'destroy'])->name('subject.delete');
    Route::get('groups', [GroupsController::class, 'index'])->name('groups.index');
    Route::get('grades/{grade}', [GradesController::class, 'show'])->name('grades.show');
    Route::get('areas/{area}', [AreasController::class, 'show'])->name('areas.show');
    Route::post('area-plan-clone/{plan}',[AreaPlanController::class, 'clone']);
    Route::get('area-plan-clones/{clone}',[AreaPlanCloneController::class, 'show']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout.api');
    Route::patch('check-activity/{activitie}', [CheckController::class, 'checkActivity'])->name('activitie.check');
    Route::patch('check-task/{task}', [CheckController::class, 'checkTask'])->name('task.check');
    Route::patch('area-plan-clone/creative-agenda/{activitie}', [ActivitiesCreativeAgendaCloneController::class, 'UpdateDescription'])->name('change.activitie.description');
    Route::apiResource('teachers', TeachersController::class);
    Route::apiResource('competences', CompetencesController::class)->except('index');
    Route::apiResource('objetives', ObjetivesController::class)->except('index');
    Route::apiResource('topics', TopicsController::class)->except('index');
    Route::apiResource('indicators', IndicatorsController::class)->except('index');
});

Route::group(['middleware' => ['cors']], function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login.api');
    Route::post('/register', [AuthController::class, 'register'])->name('register.api');
});
