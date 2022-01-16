@extends('layouts.main')

@section('container')


<h1 class="mb-5 text-center"> {{ $title }} </h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blog">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @else
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>
</div>
@if( ($posts->count()) )
<div class="card mb-3">
    @if($posts[0]->image)
    <div style="max-height: 400px; overflow:hidden;">
        <img class="img-fluid" src="{{ asset('storage/'.$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    @endif

    <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
            <small class="text-muted">
                By:<a href="/blog?author={{ $posts[0]->user->username }}" class="text-decoration-none"> {{ $posts[0]->user->name }}</a> ||
                <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}

            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <p><a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more...</a></p>
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card">
                <div class="position-absolute bg-dark px-3 py-2 text-white" style='background-color: rgba(0, 0, 0, 0.7)!important'>
                    <a class="text-decoration-none text-white" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </div>
                @if($post->image)
                <img class="img-fluid" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}">
                @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title}}</h5>
                    <p>
                        <small class="text-muted">
                            By:<a href="/authors/{{ $post->user->username }}" class="text-decoration-none"> {{ $post->user->name }}</a> ||
                            <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt  }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">No Posts Found.</p>
@endif

<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>

@endsection
