<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoCategoryController;
use App\Http\Controllers\TodoCategoryMappingController;
use App\Http\Controllers\TodosController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/todo-category', [TodoCategoryController::class, 'index']);
Route::post('/todocategory', [TodoCategoryController::class, 'store']);

Route::get('/todo-category-mapping', [TodoCategoryMappingController::class, 'index']);

Route::get('/todo', [TodosController::class, 'index']);