<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CharacterController;


Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/tutti-i-personaggi', [CharacterController::class, 'characterindex'])->name('index');

Route::get('/tutti-i-personaggi/{nickname}', [CharacterController::class, 'show'])->name('detail');

Route::get('/tutte-le-casate/personaggi-per-casata/{hogwartsHouse}', [CharacterController::class, 'housesDetail'])->name('house-detail');

Route::get('/tutte-le-casate', [HouseController::class, 'housesIndex'])->name('house-index');

