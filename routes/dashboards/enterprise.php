<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Business\EnterpriseController;

Route::group(['prefix' => 'enterprise-dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [EnterpriseController::class, 'index'])->name('enterprise-dashboard');

    Route::get('/courses', [EnterpriseController::class, 'courses'])->name(
        'enterprise-dashboard-courses',
    );
    Route::get('/students', [EnterpriseController::class, 'students'])->name(
        'enterprise-dashboard-students',
    );

    Route::get('/instructors', [EnterpriseController::class, 'instructors'])->name(
        'enterprise-dashboard-instructors',
    );
    Route::get('/followers', [EnterpriseController::class, 'followers'])->name(
        'enterprise-dashboard-followers',
    );
    Route::get('/rank', [EnterpriseController::class, 'rank'])->name('enterprise-dashboard-rank');

    Route::get('/biddies', [EnterpriseController::class, 'biddies'])->name(
        'enterprise-dashboard-biddies',
    );

    Route::get('/organization-structure', [EnterpriseController::class, 'organizationStructure'])->name(
        'enterprise-dashboard-organization-structure',
    );

    Route::get('/training-matrices', [EnterpriseController::class, 'trainingMatrices'])->name(
        'enterprise-dashboard-training-matrices',
    );

    Route::get('/bidding-offers/{id}', [EnterpriseController::class, 'biddingOffer'])->name(
        'enterprise-dashboard-bidding-offer',
    );

    Route::get('/calendar', [EnterpriseController::class, 'calender'])->name(
        'enterprise-dashboard-calender',
    );
    Route::get('/rewards', [EnterpriseController::class, 'rewards'])->name(
        'enterprise-dashboard-rewards',
    );
    Route::get('/help', [EnterpriseController::class, 'help'])->name('enterprise-dashboard-help');

    Route::get('/courses/details/{id?}', [EnterpriseController::class, 'courseDetails'])->name(
        'enterprise-dashboard-courseDetails',
    );

    Route::get('/courses/{id?}/assignments', [EnterpriseController::class, 'courseAssignments'])->name(
        'enterprise-dashboard-courseAssignments',
    );

    Route::get('/courses/{id?}/lectures', [EnterpriseController::class, 'courseLectures'])->name(
        'enterprise-dashboard-lectures',
    );

    Route::get('/courses/{id?}/sections', [EnterpriseController::class, 'courseSections'])->name(
        'enterprise-dashboard-sections',
    );

    Route::get('/courses/{id?}/quizes', [EnterpriseController::class, 'courseQuizes'])->name(
        'enterprise-dashboard-quizes',
    );
    Route::get('/privacy', [EnterpriseController::class, 'privacy'])->name(
        'enterprise-dashboard-privacy',
    );
});
