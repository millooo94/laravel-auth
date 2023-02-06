@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
<img src="{{ $post->image }}" alt="{{ $post->title }}">
<img src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }}">
<p>
    {{ $post->content }}
</p>
<div class="d-flex justify-content-center align-items-center gap-4">
    <a href="{{ route('admin.posts.edit', ['post' => $post]) }}" class="btn btn-warning">EDIT</a>
    <form action="{{ route('admin.posts.destroy', ['post' => $post]) }}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">DELETE</button>
    </form>
</div>
</div>
@endsection

