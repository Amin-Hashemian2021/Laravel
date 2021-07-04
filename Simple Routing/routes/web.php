<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
     return view('welcome');
    
 });
 Route::get('/hello', function () {
    // return view('welcome');
    return "<h1>hello woerld2</h1>";
 });
 Route::get('/hello', function () {
    // return view('welcome');
    return "<h1>hello woerld</h1>";
 });
 Route::get('/about', function () {
     return view('pages.about');
    
 });
 Route::get('/user/{id}', function ($id) {
    if($id==2)
    return "Ali";
 });
 Route::get('/index','Pagescontroller@index');