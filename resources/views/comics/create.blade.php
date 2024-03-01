@extends('layouts.app')

@section('page-title', 'Comics Create')

@section('main-content')
<h1>
    Comics Create
</h1> 

<div class="row">
    <div class="col py-4">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna all'index dei comics
            </a>
        </div>
        
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="1024">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci il nome della serie..." maxlength="64" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..."></textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-success w-100">
                    + Aggiungi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
