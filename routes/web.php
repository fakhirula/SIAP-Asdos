<?php

use App\Http\Controllers\AsdosController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RombelController;

use App\Http\Controllers\PresensiController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\AssessmentRombelController;
use App\Http\Controllers\DocumentTemplateController;

use App\Http\Controllers\AuthController;
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
    return view('index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

// Route Mahasiswa
Route::resource("/admin/mahasiswa", MahasiswaController::class)->only(['index', 'edit', 'update']);

// Route Asdos
Route::resource("/admin/asdos", AsdosController::class)->only(['index', 'edit', 'update']);

// Route Rombel
Route::resource("/admin/rombel", RombelController::class);

// Route User
Route::resource("/admin/user", UserController::class);

// Route Assessment
Route::resource("/public/assessment", AssessmentController::class)->only(['index']);

// Assessment Rombel
Route::resource("/public/assessment-rombel", AssessmentRombelController::class);
Route::get('/public/assessment-rombel/search/{code}', [AssessmentRombelController::class, 'search'])->name('assessment-rombel.search');

// Route Presensi
Route::resource("/public/presensi", PresensiController::class)->only(['index']);

// Route Document Template
Route::resource("/public/document-template", DocumentTemplateController::class)->only(['index']);

// Route Login
Route::resource('/auth/login', AuthController::class);