<?php

use Illuminate\Support\Facades\Route;


Route::get('/',function(){
  return view('home');
});

Route::get('/helloAll' , function(){
  return
  view('helloyou',['name' => 'everybody']);
});

Route::get('/helloJenny',function(){
  return
  view('helloyou', ['name' => 'Jenny']);
});

Route::get('/helloPaul' , function(){
  return
  view('helloyou' , ['name' => 'Paul']);
});

Route::get('/holaTodos' ,'spanish@holaTodos');
Route::get('/holaRodrigo' , 'spanish@holaRodrigo');
Route::get('/holaPablo' , 'spanish@holaPablo');
