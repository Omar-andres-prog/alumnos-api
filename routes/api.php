<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/alumnos/{id}', [AlumnoController::class, 'show'])
    ->middleware('id.valido');
Route::get('/alumnos/{id}', [AlumnoController::class, 'show']);
Route::post('/alumnos', [AlumnoController::class, 'store']);
Route::put('/alumnos/{id}', [AlumnoController::class, 'update'])
    ->middleware('id.valido');
Route::delete('/alumnos/{id}', [AlumnoController::class, 'destroy'])
    ->middleware('id.valido');
