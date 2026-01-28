<x-app>
    <h2>Crea un nuovo Post</h2>

    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" aria-describedby="titleHelp" value="{{ old('title') }}">
            <div id="titleHelp" class="form-text">Inserisci il titolo del post</div>
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea name="content" id="content" rows="5" class="form-control" aria-describedby="contentHelp">{{ old('content') }}</textarea>
            <div id="contentHelp" class="form-text">Inserisci il contenuto del post</div>
            @error('content') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file" name="image" id="image" class="form-control" aria-describedby="imageHelp">
            <div id="imageHelp" class="form-text">Carica un'immagine (opzionale, max 2MB)</div>
            @error('image') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-success">Salva</button>
    </form>
</x-app>
