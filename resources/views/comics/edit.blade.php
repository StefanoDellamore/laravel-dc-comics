@extends('layouts.app')

@section('page-title', $comic->title.' Edit')

@section('main-content')
<h1>
    {{ $comic->title }} Edit
</h1>

<div class="row">
    <div class="col py-4">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">
                Torna all'index dei comics
            </a>
        </div>

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            {{--
                C   Cross
                S   Site
                R   Request
                F   Forgery
            --}}
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    value="{{ $comic->title }}"
                    type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="1024">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
                <input
                    value="{{ $comic->series }}"
                    type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie..." maxlength="64" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
                <input
                    value="{{ $comic->description }}"
                    type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione..." maxlength="16" required>
            </div>

            <div>
                <button type="submit" class="btn btn-warning w-100">
                    Aggiorna
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
