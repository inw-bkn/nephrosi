<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return \Inertia\Inertia::render('LandingPage');
});
Route::get('history', function () {
    return \Inertia\Inertia::render('HistoryPage');
})->name('history');
Route::get('vision-mission', function () {
    return \Inertia\Inertia::render('VisionMissionPage');
})->name('vision-mission');
Route::get('message-from-chairman', function () {
    return \Inertia\Inertia::render('MessageFromChairmanPage');
})->name('message-from-chairman');
Route::get('staffs', function () {
    return \Inertia\Inertia::render('StaffIndex');
})->name('staffs');
Route::get('contact', function () {
    return \Inertia\Inertia::render('ContactPage');
})->name('contact');
Route::get('privacy-policy', function () {
    return \Inertia\Inertia::render('PrivacyPolicyPage');
})->name('privacy-policy');


Route::get('admission', function () {
    return \Inertia\Inertia::render('AdmissionPage');
})->name('admission');
Route::get('training-programs', function () {
    return \Inertia\Inertia::render('TrainingProgramIndex');
})->name('training-programs');
Route::get('academic-service', function () {
    return \Inertia\Inertia::render('AcademicServicePage');
})->name('academic-service');
Route::get('clinics', function () {
    return \Inertia\Inertia::render('ClinicIndex');
})->name('clinics');
Route::get('club-nephro', function () {
    return \Inertia\Inertia::render('ClubNephroPage');
})->name('club-nephro');

Route::get('research/{tag}', function ($tag) {
    return \Inertia\Inertia::render('ResearchIndex', ['tag' => $tag]);
})->name('research');

Route::get('articles', function () {
    $tag = request()->input('tag', '');
    return \Inertia\Inertia::render('ArticleIndex', ['tag' => $tag]);
})->name('articles');

Route::get('articles/{title}', function ($title) {
    return \Inertia\Inertia::render('ArticleShow', ['title' => $title]);
})->name('articles.show');

Route::get('/fonts', function () {
    return view('fonts');
});

Route::get('/fonts/{font}', function ($font) {
    return view('font-sample', ['fontName' => $font]);
});
