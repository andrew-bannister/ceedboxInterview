<?php

use App\Http\Controllers\JsonDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', JsonDataController::formatData('C:\Users\Monty Clementine\AppData\Roaming\JetBrains\PhpStorm2024.2\scratches\scratch_1.json'));
