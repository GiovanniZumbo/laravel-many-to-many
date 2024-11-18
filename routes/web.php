<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Guest\ProjectController as GuestProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [GuestProjectController::class, 'index'])->name('guest.projects.index');
Route::get('projects/{project}', [GuestProjectController::class, 'show'])->name('guest.projects.show');

Route::middleware("auth")->prefix("/admin")->name("admin.")->group(function () {
    Route::get("/projects", [AdminProjectController::class, 'index'])->name('projects.index');
    Route::get("/projects/create", [AdminProjectController::class, 'create'])->name('projects.create');
    Route::get("/projects/{project}", [AdminProjectController::class, 'show'])->name('projects.show');
    Route::get("/projects/{project}/edit", [AdminProjectController::class, 'edit'])->name('projects.edit');
    Route::post("/projects", [AdminProjectController::class, 'store'])->name('projects.store');
    Route::delete("/projects/{project}", [AdminProjectController::class, 'destroy'])->name('projects.delete');
    Route::put("/projects/{project}", [AdminProjectController::class, 'update'])->name('projects.update');
});
