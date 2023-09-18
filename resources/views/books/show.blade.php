@extends('layouts.app')

@section('content')
<h1>Detalles del Libro</h1>
<p><strong>Título:</strong> {{ $book->title }}</p>
<p><strong>Autor:</strong> {{ $book->author }}</p>
<a href="{{ route('books.index') }}" class="btn btn-primary">Volver</a>
@endsection
