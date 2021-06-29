@extends('layouts.layout')

@section('title', $course->name)

@section('content')
    <h1>Bienvenido al curso: {{$course->name}}</h1>
    <p><strong>{{$course->category}}</strong></p>
    <p>{{$course->description}}</p>

    <a href="{{route('index.courses')}}">Volver a la lista de cursos</a>
@endsection
