<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Uzer;
use App\Http\Controllers\UserController;

Route::get('/singup', [UserController::class, 'index'] );

Route::post('/register', [UserController::class, 'store']);  

Route::get('/login', [UserController::class, 'login']);

Route::get('/users', [UserController::class, 'allUsers'] ); 

Route::get('/users/{id}', [UserController::class, 'getUserById'] );

Route::get('/users/update/{id}', [UserController::class, 'updateUsers']);

Route::put('/updateuser/{id}' , [UserController::class, 'updateUsersMethod']);

Route::get('/users/delete/{id}', [UserController::class, 'deleteUser']);



