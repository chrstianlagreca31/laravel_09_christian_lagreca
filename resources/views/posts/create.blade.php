@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8">

        <h2 class="mb-4">Crea un nuovo Post</h2>

        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="form-control"
                    value="{{ old('title') }}"
                >
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Contenuto:</label>
                <textarea
                    name="content"
                    id="content"
                    rows="6"
                    class="form-control"
                >{{ old('content') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Inserisci un'immagine:</label>
                <input
                    type="file"
                    name="image"
                    id="image"
                    class="form-control"
                >
            </div>

            <button type="submit" class="btn btn-success">
                Salva Post
            </button>
        </form>

    </div>
</div>

@endsection
