@extends('welcome')

@section('content')
<h1>@lang('books')</h1>
<a href="{{ route('books.create') }}" class="btn btn-primary my-3">@lang('create')</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('title')</th>
            <th>@lang('author')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">@lang('edit')</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">@lang('delete')</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
