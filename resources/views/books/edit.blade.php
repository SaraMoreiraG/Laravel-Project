@extends('welcome')

@section('content')
<h1>Editar Libro</h1>
<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}">
    </div>
    <div class="form-group">
        <label for="author">Autor:</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
