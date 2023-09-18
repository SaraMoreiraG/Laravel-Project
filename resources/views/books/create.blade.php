@extends('welcome')

@section('content')
<h1>@lang('add-book')</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
        <label for="title mb-2">@lang('title')</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="author mb-2">@lang('author')</label>
        <input type="text" name="author" id="author" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">@lang('save')</button>
</form>
@endsection
