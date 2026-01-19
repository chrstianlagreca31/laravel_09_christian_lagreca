@extends('layouts.app')

@section('content')
<h2>Crea un nuovo Post</h2>

<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input
            type="text"
            class="form-control"
            name="title"
            id="title"
            aria-describedby="titleHelp"
        >
        <div id="titleHelp" class="form-text">
            Inserisci il titolo del post
        </div>
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Contenuto</label>
        <textarea
            class="form-control"
            name="content"
            id="content"
            rows="5"
            aria-describedby="contentHelp"
        ></textarea>
        <div id="contentHelp" class="form-text">
            Inserisci il contenuto del post
        </div>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input
            type="file"
            class="form-control"
            name="image"
            id="image"
            aria-describedby="imageHelp"
        >
        <div id="imageHelp" class="form-text">
            Carica un'immagine 
        </div>
    </div>

    <button type="submit" class="btn btn-success">
        Salva
    </button>
</form>
@endsection
