<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('competition')->group(function() {

    /*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
    Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
        include_route_files(__DIR__.'/frontend/');
    });

    /*
     * Backend Routes
     * Namespaces indicate folder structure
     */
    Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
        /*
         * These routes need view-backend permission
         * (good if you want to allow more than one group in the backend,
         * then limit the backend features by different roles or permissions)
         *
         * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
         * These routes can not be hit if the password is expired
         */
        include_route_files(__DIR__.'/backend/');
    });
});


Breadcrumbs::for('admin.competition', function ($trail) {
    $trail->push('Competitions', route('admin.competition'));
});


Breadcrumbs::for('admin.competition.create', function ($trail) {
    $trail->push('Create Competition', route('admin.competition.create'));
});

Breadcrumbs::for('admin.competition.edit', function ($trail) {
    $trail->push('Edit Competition', route('admin.competition.edit',1));
});


Breadcrumbs::for('admin.category.index', function ($trail) {
    $trail->push('Categories', route('admin.category.index'));
});

Breadcrumbs::for('admin.category.create', function ($trail) {
    $trail->push('Create Categories', route('admin.category.create'));
});


Breadcrumbs::for('admin.category.edit', function ($trail) {
    $trail->push('Edit Categories', route('admin.category.edit',1));
});


Breadcrumbs::for('admin.competitior.index', function ($trail) {
    $trail->push('View Competitor', route('admin.competitior.index',1));
});
Breadcrumbs::for('admin.competitior.show', function ($trail) {
    $trail->push('Competition Details', route('admin.competitior.show',1));
});

Breadcrumbs::for('admin.competitior.performance', function ($trail) {
    $trail->push('View Performance', route('admin.competitior.performance',1));
});

Breadcrumbs::for('admin.competition.register_judge.edit', function ($trail) {
    $trail->push('Judge Edit', route('admin.competition.register_judge.edit',1));
});


Breadcrumbs::for('admin.competition.judge_request.index', function ($trail) {
    $trail->push('Judge Request', route('admin.competition.judge_request.index',1));
});

Breadcrumbs::for('admin.competition.score_board', function ($trail) {
    $trail->push('Score Board', route('admin.competition.score_board',1));
});

Breadcrumbs::for('admin.competition.judgeRequest.show', function ($trail) {
    $trail->push('Judge Request View', route('admin.competition.judgeRequest.show',1));
});

Breadcrumbs::for('admin.competition.organizer_request.index', function ($trail) {
    $trail->push('Judge Request', route('admin.competition.organizer_request.index'));
});

Breadcrumbs::for('admin.competition.organizer_request.show', function ($trail) {
    $trail->push('Judge Request Show', route('admin.competition.organizer_request.show',1));
});

Breadcrumbs::for('admin.become_judge.index', function ($trail) {
    $trail->push('Become Judge', route('admin.become_judge.index'));
});

Breadcrumbs::for('admin.become_judge.show', function ($trail) {
    $trail->push('Become Judge Show', route('admin.become_judge.show',1));
});

Breadcrumbs::for('admin.votes.index', function ($trail) {
    $trail->push('Votes', route('admin.votes.index',1));
});








