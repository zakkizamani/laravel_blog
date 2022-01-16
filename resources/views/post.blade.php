@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-8 justify-content-center mb-5">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By: <a href="/blog?author={{ $post->user->username  }}" class="text-decoration-none">{{ $post->user->name }}</a> || <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
            @if($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img class="img-fluid mt-3" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}">
            </div>
            @else
            <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif

            <article class="my-3 fs-5">

                {!! $post->body !!}
            </article>

            <a href="/blog" class="text-decoration-none d-block mt-3">back to posts</a>
        </div>
    </div>
</div>




@endsection
