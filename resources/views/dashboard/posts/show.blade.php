@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a class="btn btn-success" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back to all my posts</a>
            <a class="btn btn-warning" href=""><span data-feather="edit"></span> Edit</a>
            <a class="btn btn-danger" href=""><span data-feather="x-circle"></span> Delete</a>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection