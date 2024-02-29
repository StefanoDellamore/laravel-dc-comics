@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')

<h1>
    Comics Index
</h1>

<div class="row">
    <div class="col">
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
