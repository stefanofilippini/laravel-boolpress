@extends('layouts.app')

@section('content')
    <h2>{{ $post->Title }}</h2>
    <img src="{{ $post->thumb }}" alt="Image not found">
    <p>{{ $post->description }}</p>

    <a href="{{ route('admin.index') }}">Back</a>
@endsection