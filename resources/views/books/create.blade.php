@extends('welcome')

@section('content')
<h1>Agregar Libro</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="author">Autor:</label>
        <input type="text" name="author" id="author" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
