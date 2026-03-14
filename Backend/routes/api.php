<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoCategoryController;
use App\Http\Controllers\TodoCategoryMappingController;
use App\Http\Controllers\TodosController;

Route::get('/todo-category', [TodoCategoryController::class, 'index']);
Route::post('/todo-category', [TodoCategoryController::class, 'store']);
Route::put('/todo-category/{id}', [TodoCategoryController::class, 'update']);
Route::delete('/todo-category/{id}', [TodoCategoryController::class, 'destroy']);

Route::get('/todo-category-mapping', [TodoCategoryMappingController::class, 'index']);
Route::post('/todo-category-mapping', [TodoCategoryMappingController::class, 'store']);
Route::put('/todo-category-mapping/{id}', [TodoCategoryMappingController::class, 'update']);
Route::delete('/todo-category-mapping/{id}', [TodoCategoryMappingController::class, 'destroy']);

Route::get('/todo', [TodosController::class, 'index']);
Route::post('/todo', [TodosController::class, 'store']);
Route::put('/todo/{id}', [TodosController::class, 'update']);
Route::delete('/todo/{id}', [TodosController::class, 'destroy']);