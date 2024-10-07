<?php

use App\Http\Controllers\JsonDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', JsonDataController::formatData('..\tests\Unit\jsonTest.json'));
