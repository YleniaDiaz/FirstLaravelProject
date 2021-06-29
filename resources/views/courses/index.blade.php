@extends('layouts.layout')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la página de cursos</h1>
    <a href="{{route('create.courses')}}" target="_blank" rel="noopener noreferrer">Crear curso</a>
    <ul>
      @foreach ($courses as $course)
          <li><a href="{{route('show.courses', $course->id)}}">{{$course->name}}</a></li>
      @endforeach
    </ul>
    {{$courses->links()}}
@endsection
