@extends('welcome')

@section('content')
<div class="container">
    <h1>Contacto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <div class="form-group mb-3">
            <label class="mb-2" for="email">Correo</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="example@mail.com" required>
        </div>
        <div class="form-group mb-3">
            <label for="message mb-2">Mensaje:</label>
            <textarea name="message" id="message" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
