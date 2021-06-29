@extends('layouts.layout')

@section('title', 'Crear curso')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <form action="{{ route('store.courses') }}" method="post">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" />
        </label>
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" />
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <button type="submit">Crear curso</button>
    </form>
@endsection
