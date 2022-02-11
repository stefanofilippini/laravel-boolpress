@extends('layouts.app')

@section('content')

    <form action="{{ route('admin.store') }}" method="POST">
        @method("POST")
        @csrf
        <label class="mb-2" for="Title">Titolo</label><br>
        <input class="mb-2" type="text" name="Title" placeholder="Inserisci il Titolo"><br>
        <label class="mb-2" for="description">Descrizione</label><br>
        <textarea class="mb-2" name="description" cols="30" rows="5" placeholder="Inserisci un a breve descrizione"></textarea><br>
        <label class="mb-2" for="thumb">URL Immagine</label><br>
        <input class="mb-2" type="text" name="thumb" placeholder="inserisci il link all'immagine"><br>
        <input class="mb-2" type="submit">
    </form>
@endsection