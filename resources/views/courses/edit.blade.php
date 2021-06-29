@extends('layouts.layout')

@section('title', 'Editar curso')

@section('content')
    <h1>Editar curso</h1>
    <form action="{{ route('update.courses', $id) }}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$id->name}}"/>
        </label>
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{$id->category}}"/>
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{$id->description}}</textarea>
        </label>
        <br>
        <button type="submit">Actualizar curso</button>
    </form>
@endsection