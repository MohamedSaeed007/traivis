<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Business\InstituteController;

Route::group(['prefix' => 'institute-dashboard'], function () {
    Route::get('/', [InstituteController::class, 'index'])->name('institute-dashboard');

    Route::get('/courses', [InstituteController::class, 'courses'])->name('institute-dashboard-courses');
    Route::get('/students', [InstituteController::class, 'students'])->name(
        'institute-dashboard-students',
    );

    Route::get('/instructors', [InstituteController::class, 'instructors'])->name(
        'institute-dashboard-instructors',
    );
    Route::get('/mkt_manager', [InstituteController::class, 'mkt_manager'])->name(
        'instructor-dashboard-mkt_manager',
    );
    Route::get('/bidding-offers/{id}', [InstituteController::class, 'biddingOffer'])->name(
        'institute-dashboard-bidding-offer',
    );
    Route::get('/instructors', [InstituteController::class, 'instructors'])->name(
        'institute-dashboard-instructors',
    );
    Route::get('/mkt_manager', [InstituteController::class, 'mkt_manager'])->name(
        'instructor-dashboard-mkt_manager',
    );
    Route::get('/followers', [InstituteController::class, 'followers'])->name(
        'institute-dashboard-followers',
    );
    Route::get('/rank', [InstituteController::class, 'rank'])->name('institute-dashboard-rank');
    Route::get('/biddies', [InstituteController::class, 'biddies'])->name('institute-dashboard-biddies');

    Route::get('/calendar', [InstituteController::class, 'calender'])->name(
        'institute-dashboard-calender',
    );
    Route::get('/rewards', [InstituteController::class, 'rewards'])->name('institute-dashboard-rewards');
    Route::get('/help', [InstituteController::class, 'help'])->name('institute-dashboard-help');

    Route::get('/privacy', [InstituteController::class, 'privacy'])->name('institute-dashboard-privacy');

    Route::get('/courses/details/{id?}', [InstituteController::class, 'courseDetails'])->name(
        'institute-dashboard-courseDetails',
    );

    Route::get('/courses/{id?}/assignments', [InstituteController::class, 'courseAssignments'])->name(
        'institute-dashboard-courseAssignments',
    );

    Route::get('/courses/{id?}/lectures', [InstituteController::class, 'courseLectures'])->name(
        'institute-dashboard-lectures',
    );

    Route::get('/courses/{id?}/sections', [InstituteController::class, 'courseSections'])->name(
        'institute-dashboard-sections',
    );

    Route::get('/courses/{id?}/quizes', [InstituteController::class, 'courseQuizes'])->name(
        'institute-dashboard-quizes',
    );
});
