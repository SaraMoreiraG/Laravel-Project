@extends('welcome')

@section('content')
<h1>Lista de Libros</h1>
<a href="{{ route('books.create') }}" class="btn btn-primary">Crear</a>
<table class="table">
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
