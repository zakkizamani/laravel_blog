@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-8 my-3">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="text-decoration-none badge btn-success "><span data-feather="arrow-left"></span> Back to my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="text-decoration-none badge btn-warning "><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span></button>
            </form>

            @if($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img class="img-fluid mt-3" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}">
            </div>
            @else
            <img class="img-fluid mt-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
            <article class="my-3 fs-5">

                {!! $post->body !!}
            </article>

            <a href="/dashboard/posts" class="text-decoration-none d-block mt-3">back to posts</a>
        </div>
    </div>
</div>

@endsection
