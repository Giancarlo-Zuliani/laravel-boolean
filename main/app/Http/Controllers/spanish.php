<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spanish extends Controller
{
  public function holaTodos(){
    return
    view('hola' , ['name' => 'Todos']);
  }

  public function holaRodrigo(){
    return
    view('hola',['name' => 'Rodrigo']);
  }

  public  function holaPablo(){
    return
    view('hola',['name' => 'Pablo']);
  }
};
