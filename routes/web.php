<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume.index');
Route::get('/resume/download', [ResumeController::class, 'downloadPdf'])->name('resume.download');
// Route::get('/download-resume', [ResumeController::class, 'downloadResume'])->name('download.resume');
Route::get('/resume/generate', [ResumeController::class, 'resumeGenerate'])->name('resume.resumeGenerate');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');