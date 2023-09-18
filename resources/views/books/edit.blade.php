@extends('welcome')

@section('content')
<h1>@lang('edit-book')</h1>
<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="title mb-2">@lang('title')</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}">
    </div>
    <div class="form-group mb-3">
        <label for="author mb-2">@lang('author')</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}">
    </div>
    <button type="submit" class="btn btn-primary">@lang('update')</button>
</form>
@endsection
