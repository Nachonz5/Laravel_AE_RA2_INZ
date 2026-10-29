@extends('layouts.app')
@section('title', 'Libros')
@section('content')
    <h2>Listado de libros</h2>
    @if($libros->count() > 0)
        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año de publicación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                    <tr>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay libros registrados.</p>
    @endif
@endsection