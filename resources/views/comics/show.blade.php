@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')

<h1>
    {{ $comic->title }}
</h1>

<div class="row">
    <div class="col">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna all'index dei comics
            </a>
        </div>
        <div class="card">
        <h3>
            {{ $comic->title }}
        </h3>
        <div class="info-comics">
            <ul>
                <li>
                    <p>Serie:{{ $comic->series }}</p>
                </li>
                <li>
                    <p>Prezzo: ${{ $comic->price }}</p>
                </li>
                <li>
                    <p>Descrizione: ${{ $comic->description }}</p>
                </li>
            </ul>
        </div>
    
       </div>
    </div>
</div>
@endsection
