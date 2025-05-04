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


    Route::get('pariwartan/news', function () {
        return view('Pariwartan.News.index');
    })->name('news.index');

    Route::get('pariwartan/news/create', function () {
        return view('Pariwartan.News.create');
    })->name('news.create');

    // Events Routes
    Route::get('pariwartan/events', function () {
        return view('Pariwartan.Events.index');
    })->name('events.index');

    Route::get('pariwartan/events/create', function () {
        return view('Pariwartan.Events.create');
    })->name('events.create');

    // Complaints Routes
    Route::get('pariwartan/complaints', function () {
        return view('Pariwartan.Complaints.index');
    })->name('complaints.index');

    Route::get('pariwartan/complaints/create', function () {
        return view('Pariwartan.Complaints.create');
    })->name('complaints.create');
});

require __DIR__ . '/auth.php';
