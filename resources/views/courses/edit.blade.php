@extends('layouts.layout')

@section('title', 'Editar curso')

@section('content')
    <h1>Editar curso</h1>
    <form action="{{ route('course.update', $course) }}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $course->name) }}" />
        </label>
        <br>
        @error('name')
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{ old('category', $course->category) }}" />
        </label>
        <br>
        @error('category')
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{ old('description', $course->description) }}</textarea>
        </label>
        <br>
        @error('description')
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <button type="submit">Actualizar curso</button>
    </form>
@endsection
