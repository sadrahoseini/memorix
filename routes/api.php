<?php

use Illuminate\Http\JsonResponse;

Route::get('/test', function () {
    return JsonResponse::create([
        'message' => 'Hello, World!',
    ]);
});