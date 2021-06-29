<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  //muestra pagina principal
  public function index()
  {
    $courses = Course::orderBy('id', 'desc')->paginate(); //select por página de todos los cursos url -> page=x
    return view('courses.index', compact('courses'));
  }

  //muestra pagina crear un curso
  public function create()
  {
    return view('courses.create');
  }

  //crear curso
  public function store(Request $request)
  {
    $course = new Course();
    $course->name = $request->name;
    $course->category = $request->category;
    $course->description = $request->description;

    $course->save();

    return redirect()->route('show.courses', $course->id);
  }

  //muestra pagina curso especifico
  public function show($id)
  {
    $course = Course::find($id); //buscar curso por id

    //compact() -> devuelve array ['id'->$var] (si el id y el nombre var es el mismo)
    return view('courses.show', compact('course'));
  }

  public function edit(Course $id) //busca directamente el curso usando el id
  {
    return view('courses.edit', compact('id'));
  }

  public function update($id, Request $request)
  {
    $course=Course::find($id);
    $course->name = $request->name;
    $course->category = $request->category;
    $course->description = $request->description;

    $course->save();
    
    return view('courses.show', compact('course'));
  }
}
