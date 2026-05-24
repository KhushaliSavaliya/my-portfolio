<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\MessageController;

// ── Public Portfolio ─────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'sendMessage'])->name('contact.send');

// ── Auth (Laravel Breeze generates these) ────────────────────
require __DIR__.'/auth.php';

// ── Admin Panel (protected) ──────────────────────────────────
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Projects
    Route::resource('projects', ProjectController::class);
    Route::patch('projects/{project}/toggle', [ProjectController::class, 'toggleActive'])
         ->name('projects.toggle');

    // Experiences
    Route::resource('experiences', ExperienceController::class);

    // Skills
    Route::resource('skills', SkillController::class);

    // Messages
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('messages/{message}', [MessageController::class, 'show'])->name('messages.show');
    Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
    Route::post('messages/mark-all-read', [MessageController::class, 'markAllRead'])->name('messages.markAllRead');
});