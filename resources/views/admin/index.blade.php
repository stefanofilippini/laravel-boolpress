@extends('layouts.app')

@section('content')

    <div class="container">
        <table>
            @foreach ($posts as $post)
            <tr>
                <td>
                    {{ $post->Title }}
                </td>
                <td>
                    <a href="{{ route('admin.edit', $post->id) }}">EDIT</a>
                </td>
                <td>
                    <a href="{{ route('admin.show', $post->id) }}">SHOW</a>
                </td>
                <td>
                    <a href="#">DELETE</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection