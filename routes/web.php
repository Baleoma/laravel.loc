<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Маршруты для веб-интерфейса
Route::get('/test1', function () {
    return 'Hello World';
});
// Перенаправление
Route::redirect('/test2', 'test1', 302 );
Route::permanentRedirect('/test3', 'test1');

// Маршрут представлений с передачей данных
Route::view('/test4', 'welcome', ['name' => 'John Doe']);

// Обязательный параметр в маршруте
Route::get('/test5/{id}', function (string $id) {
   return $id;
});
// Необязательный параметр в маршруте
Route::get('/test5/{id}/{text?}', function (string $id, string $text = null) {
    return $id . ' ' . $text;
});
// Именованный маршрут
Route::get('/test6', function () {
    return 'Именованный маршрут';
})->name('test');

// Маршрут использующий контроллер
Route::get('/test7', [\App\Http\Controllers\TestController::class, 'index'])->name('test7');
Route::get('/test8/{id}', [\App\Http\Controllers\TestController::class, 'index2'])->name('test8');
