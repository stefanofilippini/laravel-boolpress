@extends('layouts.app')

@section('content')

    <div class="container">
        <ul>
            @foreach ($posts as $post)
                <li>
                    {{ $post->title }}
                </li>
            @endforeach
        </ul>
            
    </div>