<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/item','App\Http\Controllers\TodoController@index');