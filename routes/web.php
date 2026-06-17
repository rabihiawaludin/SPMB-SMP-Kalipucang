<?php

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/daftar', [StudentController::class, 'create']);
Route::post('/daftar', [StudentController::class, 'store']);
Route::get('/daftar/success/{student}', [StudentController::class, 'success']);

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/hasil', [StudentController::class, 'searchResults']);
Route::post('/hasil', [StudentController::class, 'findResults']);

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get(
        '/students/export',
        [AdminStudentController::class, 'export']
    )->name('admin.students.export');

    Route::resource('students', AdminStudentController::class)->only(['index', 'show']);
    Route::get('/students/{student}', [
        AdminStudentController::class,
        'show'
    ]);
    Route::post(
        '/students/{student}/verify',
        [AdminStudentController::class, 'verify']
    );

    Route::post(
        '/students/{student}/reject',
        [AdminStudentController::class, 'reject']
    );

    Route::get(
        '/settings',
    [SettingController::class, 'index']
    );

    Route::post(
        '/settings/toggle-announcement',
        [SettingController::class, 'toggleAnnouncement']
    );
});

require __DIR__.'/auth.php';
