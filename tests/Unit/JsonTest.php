<?php

namespace Tests\Unit;

use App\Http\Controllers\JsonDataController;
use Tests\TestCase;

class JsonTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function jsonTest(): void
    {
        JsonDataController::formatData('C:\Users\Monty Clementine\AppData\Roaming\JetBrains\PhpStorm2024.2\scratches\scratch_1.json');
    }
}
