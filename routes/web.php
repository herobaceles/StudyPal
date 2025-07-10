<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test-kernel', function () {
    return 'Kernel is working!';
});

Route::get('/auth-test', function () {
    return 'You are authenticated!';
})->middleware('auth');

Route::get('/onboarding', function () {
    return view('onboarding');
})->middleware(['auth'])->name('onboarding');

Route::post('/onboarding', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'college_course' => 'required|string',
        'study_goal' => 'required|string',
    ]);

    $user = auth()->user();
    $user->current_college_course = $request->college_course;
    $user->desired_study_goal = $request->study_goal;
    $user->onboarded = true;
    $user->save();

    return redirect('/dashboard')->with('status', 'Onboarding complete!');
})->middleware(['auth'])->name('onboarding.complete');



require __DIR__.'/auth.php';
