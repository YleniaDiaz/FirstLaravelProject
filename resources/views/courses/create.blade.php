@extends('layouts.layout')

@section('title', 'Crear curso')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <form action="{{ route('store.courses') }}" method="post">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Javascript" />
        </label>
        <br>
        @error('name')
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category" value="{{ old('category') }}" placeholder="Desarrollo web" />
        </label>
        <br>
        @error('category')
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5">{{ old('description') }}</textarea>
        </label>
        <br>
        @error('description')
            <small>*{{ $message }}</small>
        @enderror
        <br>
        <button type="submit">Crear curso</button>
    </form>
@endsection
