@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')

<h1>
    Comics Index
</h1>

<div class="row">
    <div class="col">

        <div class="mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-success w-100 fs-5">
                + Aggiungi
            </a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>${{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>
                        <a href="{{route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                            vedi
                        </a>
                        <a href="{{route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">
                            modifica
                        </a>    
                    </td>
                </tr>
                @endforeach               
            </tbody>
        </table>
    </div>
</div>
@endsection
