<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return \Inertia\Inertia::render('LandingPage', [
        'heroSlides' => config('demo.heroSlides'),
        'news' => config('demo.news'),
        'articles' => config('demo.articles'),
        'stats' => config('demo.stats'),
    ]);
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
