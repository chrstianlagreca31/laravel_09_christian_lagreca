@extends('layouts.app')

@section('content')
<h2 class="mb-4">Tutti i Post</h2>

<div class="row">
    @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>{{ $post->title }}</h5>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
