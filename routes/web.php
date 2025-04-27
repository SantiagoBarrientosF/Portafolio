<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;

Route::get('/', function () {
    return view('profile');
});

Route::get('/about_me', function() {
    return view('profile'); 
});

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'es'])) {
        abort(400); 
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');

Route::get('/download_cv', [DownloadController::class, 'download_cv'])->name('download_cv');
