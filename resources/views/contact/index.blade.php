@extends('layouts.layout')

@section('title', 'Contacto')

@section('content')
    <h1>Déjanos un mensaje</h1>

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" placeholder="Introduzca su nombre" />
        </label>
        <br>
        @error('name')
            <p><strong>{{ $message }}</strong></p>
        @enderror
        <br>
        <label>
            Email:
            <br>
            <input type="email" name="email" placeholder="Introduzca su email" />
        </label>
        <br>
        @error('email')
            <p><strong>{{ $message }}</strong></p>
        @enderror
        <br>
        <label>
            Mensaje:
            <br>
            <textarea name="message" rows="5" placeholder="Escriba su mensaje"></textarea>
        </label>
        <br>
        @error('message')
            <p><strong>{{ $message }}</strong></p>
        @enderror
        <br>
        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('infoEmail'))
        <script>
            alert("{{ session('infoEmail') }}");
        </script>
    @endif

@endsection
