@extends('layouts.layout')

@section('title', $course->name)

@section('content')
    <h1>Bienvenido al curso: {{$course->name}}</h1>
    <p><strong>{{$course->category}}</strong></p>
    <p>{{$course->description}}</p>
    <br>
    <a href="{{route('edit.courses', $course->id)}}">Editar curso</a>
    <br>
    <br>
    <a href="{{route('index.courses')}}">Volver a la lista de cursos</a>
    <br>
    <br>
    <form action="{{route('destroy.courses', $course)}}" method="POST">
      @csrf
      @method('delete')
      <button type="submit">Eliminar</button>
    </form>
@endsection
