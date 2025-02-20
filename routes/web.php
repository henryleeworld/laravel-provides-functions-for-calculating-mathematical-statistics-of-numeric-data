<?php

use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;

Route::get('statistics/calculate/', [StatisticsController::class, 'calculate']);
