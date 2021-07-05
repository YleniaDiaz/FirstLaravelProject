@extends('layouts.layout')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la página de cursos</h1>
    <a href="{{route('course.create')}}" rel="noopener noreferrer">Crear curso</a>
    <ul>
      @foreach ($courses as $course)
          <li><a href="{{route('course.show', $course)}}">{{$course->name}}</a></li>
      @endforeach
    </ul>
    {{$courses->links()}}
@endsection
