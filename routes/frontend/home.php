<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\MyCompetitionController;
use App\Http\Controllers\Frontend\User\PendingController;
use Modules\Competition\Http\Controllers\Frontend\MyJudgmentController;
use Modules\Competition\Http\Controllers\Frontend\CreateEvenetController;
use Modules\Competition\Http\Controllers\Frontend\MyTeamController;
use Modules\Competition\Http\Controllers\Frontend\LeaderBoardController;
use Modules\Competition\Http\Controllers\Frontend\MyScoreController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BecomeAPartnerController;
use App\Http\Controllers\Frontend\CookiePolicyController;
use App\Http\Controllers\Frontend\FAQController;
use App\Http\Controllers\Frontend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\TermsController;
use App\Http\Controllers\Frontend\TrainingController;
use App\Http\Controllers\Frontend\BlogPostController;
use App\Http\Controllers\Frontend\Auth\RegisterController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about-us', [AboutController::class, 'index'])->name('about_us');
Route::get('terms-and-conditions', [TermsController::class, 'index'])->name('terms_and_conditions');
Route::get('training', [TrainingController::class, 'index'])->name('training');
Route::post('training/store', [TrainingController::class, 'store'])->name('training.store');
Route::get('become-a-partner', [BecomeAPartnerController::class, 'index'])->name('become_a_partner');
Route::get('cookie-policy', [CookiePolicyController::class, 'index'])->name('cookie_policy');
Route::get('faq', [FAQController::class, 'index'])->name('faq');
Route::get('privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy_policy');
Route::get('posts/{category}', [BlogPostController::class, 'allPosts'])->name('posts');
Route::get('blog-posts/{id}', [BlogPostController::class, 'index'])->name('blog_post');


Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('ranking/{competiton_id}', [ContactController::class, 'ranking'])->name('ranking');
Route::post('search_ranking', [ContactController::class, 'search_ranking'])->name('search_ranking');

Route::get('votes/{competiton_id}', [ContactController::class, 'votes'])->name('votes');
Route::post('search_votes', [ContactController::class, 'search_votes'])->name('search_votes');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('create_event/register_as_organizer', [CreateEvenetController::class, 'index'])->name('register_as_organizer');
        Route::post('create_event/register_as_organizer_store', [CreateEvenetController::class, 'store'])->name('reuqst_organizer');
        Route::post('create_event/organizer_edit', [CreateEvenetController::class, 'updateOrganizer'])->name('request_organizer_update');
        Route::get('create_event/orz_create_competition', [CreateEvenetController::class, 'create_competition'])->name('orz_create_competition');
        Route::post('create_event/create_competition_orz', [CreateEvenetController::class, 'orz_create_competition_store'])->name('orz_create_competition_store');

        Route::get('create_event/edit_competition/{id}', [CreateEvenetController::class, 'orz_edit_competition'])->name('orz_edit_competition');
        Route::post('create_event/edit_competition_update', [CreateEvenetController::class, 'edit_competition_update'])->name('edit_competition_update');
        Route::post('create_event/destroy_competition/{id}', [CreateEvenetController::class, 'destroy'])->name('destroy_competition');
        Route::get('create_event/edit_judge_form/{id}', [CreateEvenetController::class, 'edit_judge_form'])->name('edit_judge_form');
        Route::post('create_event/edit_judge_form_update', [CreateEvenetController::class, 'edit_judge_form_update'])->name('edit_judge_form_update');

        Route::get('create_event/score_board/{competition_id}', [CreateEvenetController::class, 'score_board'])->name('score_board');

        Route::get('create_event/judges_list/{competition_id}', [CreateEvenetController::class, 'judges_list'])->name('judges_list');
        Route::get('create_event/judges_list_Details/{competition_id}', [CreateEvenetController::class, 'judgeRequetDetails'])->name('judgeRequetDetails');
        Route::get('create_event/judges_list/delete/{id}', [CreateEvenetController::class, 'judge_delete'])->name('judge_delete');
        Route::get('create_event/judges_list/show/{id}', [CreateEvenetController::class, 'judge_show'])->name('judge_show');
        Route::post('create_event/judges_list/update', [CreateEvenetController::class, 'judge_status'])->name('judge_status');

        Route::get('create_event/competitors_list/{competition_id}', [CreateEvenetController::class, 'competitors_list'])->name('competitors_list');
        Route::get('create_event/competitors_list_Details/{competition_id}', [CreateEvenetController::class, 'competitorsRequetDetails'])->name('competitorsRequetDetails');
        Route::get('create_event/competitors_list/delete/{id}', [CreateEvenetController::class, 'competitor_delete'])->name('competitor_delete');
        Route::get('create_event/competitors_list/show/{id}', [CreateEvenetController::class, 'competitor_show'])->name('competitor_show');
        Route::post('create_event/competitors_list/update', [CreateEvenetController::class, 'competitor_status'])->name('competitor_status');

        Route::get('my_competition', [MyCompetitionController::class, 'index'])->name('my_competition');
        Route::get('my_competition/details/{id}', [MyCompetitionController::class, 'performance_page'])->name('performance_page');
        Route::post('competition/performance', [MyCompetitionController::class, 'postPerformance'])->name('postPerformance');

        Route::get('pending_competition/details_pending', [PendingController::class, 'pending_competition'])->name('details_pending');
        Route::get('pending_competition/com_reg_form/{id}', [PendingController::class, 'com_reg_form'])->name('com_reg_form');
        Route::post('pending_competition/register_request_update', [PendingController::class, 'register_request_update'])->name('register_request_update');
        
        Route::post('competition/save_proformance', [MyCompetitionController::class, 'save_performance'])->name('save_performance');
        Route::get('my_judgement', [MyJudgmentController::class, 'index'])->name('details_judgement');
        Route::get('my_judgement/open_judgment/{id}', [MyJudgmentController::class, 'show'])->name('show_judgment');
        Route::get('viewCompetitor/{id}', [MyJudgmentController::class, 'viewCompetitor'])->name('show_competitor');
        Route::post('add_marks_judge', [MyJudgmentController::class, 'add_marks_judge'])->name('add_marks_judge');
        Route::post('judge_form', [MyJudgmentController::class, 'judge_form'])->name('judge_form');
        Route::post('judge_form_update', [MyJudgmentController::class, 'judge_form_update'])->name('judge_form_update');

        Route::get('my_team', [MyTeamController::class, 'index'])->name('my_team');

        Route::get('my_leader_board', [LeaderBoardController::class, 'index'])->name('my_leader_board');
        Route::get('my_leader_board/get-competitions', [LeaderBoardController::class, 'getCompetitions'])->name('my_leader_board.get_competitions');
        Route::get('my_leader_board/get-competition-score/{id}', [LeaderBoardController::class, 'getCompetitionScore'])->name('my_leader_board.get_competition_score');
        Route::get('my_leader_board/competition_score/{id}', [LeaderBoardController::class, 'getscore'])->name('competition_score.getscore');

        
        Route::get('user_settings', [RegisterController::class, 'user_settings'])->name('user_settings');
        Route::post('user_settings/update', [RegisterController::class, 'user_settings_update'])->name('user_settings_update');


        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');
        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
