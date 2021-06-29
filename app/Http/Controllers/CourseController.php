<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  //muestra pagina principal
  public function index()
  {
    $courses = Course::paginate(); //select por página de todos los cursos url -> page=x
    return view('courses.index', compact('courses'));
  }

  //muestra pagina crear un curso
  public function create()
  {
    return view('courses.create');
  }

  //muestra pagina curso especifico
  public function show($id)
  {
    $course = Course::find($id); //buscar curso por id

    //compact() -> devuelve array ['id'->$var] (si el id y el nombre var es el mismo)
    return view('courses.show', compact('course'));
  }
}
