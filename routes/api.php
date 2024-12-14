<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ApplicationControll;

Route::get('/vacancies', [VacancyController::class, 'index']); // Получить список вакансий
Route::post('/vacancies', [VacancyController::class, 'store']); // Создать новую вакансию

Route::post('/applications', [ApplicationController::class, 'store']); // Подать заявку
Route::get('/vacancies/{vacancyId}/applications', [ApplicationController::class, 'index']); // Получить заявки на вакансию

