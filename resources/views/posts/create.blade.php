@extends('layouts.app')

@section('content')
<h2>Crea un nuovo Post</h2>

<form method="POST" action="{{ route('posts.store') }}" class="mt-4">
    @csrf
    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Contenuto</label>
        <textarea name="content" class="form-control" rows="5"></textarea>
    </div>

    <button class="btn btn-success">Salva</button>
</form>
@endsection
