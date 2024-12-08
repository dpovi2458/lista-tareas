<?php
use App\Http\Controllers\TareaController;

Route::get('/', [TareaController::class, 'index']);
Route::post('/tareas', [TareaController::class, 'store']);
Route::patch('/tareas/{tarea}', [TareaController::class, 'update']);