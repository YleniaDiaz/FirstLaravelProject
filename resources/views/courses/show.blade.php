@extends('layouts.layout')

@section('title', $course)

@section('content')
    <h1>Bienvenido al curso: {{$course}}</h1>
    <?php if ($category) echo "<p>Categoría: ${category}"; ?>
@endsection
