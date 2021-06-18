<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
  //muestra pagina principal
  public function index()
  {
    return view('courses.index');
  }

  //muestra pagina crear un curso
  public function create()
  {
    return view('courses.create');
  }

  //muestra pagina curso especifico
  public function show($course, $category = null)
  {
    //compact() -> devuelve array ['id'->$var] (si el id y el nombre var es el mismo)
    return view('courses.show', compact('course', 'category'));
  }
}
