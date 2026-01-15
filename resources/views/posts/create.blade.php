@extends('layouts.app')

@section('content')
<h2>Crea un nuovo Post</h2>

<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Titolo</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label>Contenuto</label>
        <textarea name="content" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Immagine</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button class="btn btn-success">Salva</button>
</form>
@endsection
