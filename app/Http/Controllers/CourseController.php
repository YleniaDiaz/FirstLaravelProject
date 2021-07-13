<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourse;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
  public function store(StoreCourse $request) //Valida los params directamente
  {
    $course = Course::create($request->all());

    return redirect()->route('course.show', $course->id);
  }

  //muestra pagina curso especifico
  public function show(Course $course)
  {
    //$course = Course::find($id); //buscar curso por id

    //compact() -> devuelve array ['id'->$var] (si el id y el nombre var es el mismo)
    return view('courses.show', compact('course'));
  }

  public function edit(Course $course) //busca directamente el curso usando el id
  {
    return view('courses.edit', compact('course'));
  }

  public function update(Request $request, Course $course)
  {
    //validar campos del formulario
    $request->validate([
      'name' => 'required',
      'category' => 'required',
      'description' => 'required',
    ]);

    $course->name = $request->name;
    $course->slug=Str::slug($request->name, '-');
    $course->category = $request->category;
    $course->description = $request->description;

    $course->save();

    return view('courses.show', compact('course'));
  }

  public function destroy(Course $course)
  {
    $course->delete();
    return redirect()->route('course.index');
  }
}
