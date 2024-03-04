<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Comic;

// Form Request
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /*
        R - READ
    */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view ('comics.index', compact('comics'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /* -------------- FINE READ -------------- */

    /*
        C - CREATE
    */
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    public function store(StoreComicRequest $request)
    {
        $comicData = $request->validated();

        $comic = Comic::create($comicData);


        //$comicData = $request->all();

        //$comic = new Comic();
        //$comic->title = $comicData['title'];
        //$comic->description = $comicData['description'];
        //$comic->thumb = $comicData['thumb'];
        //$comic->price = $comicData['price'];
        //$comic->series = $comicData['series'];
        //$comic->sale_date = $comicData['sale_date']; 
        //$comic->type = $comicData['type'];
        //$comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }
        

    /* -------------- FINE CREATE -------------- */

    /*
        U - UPDATE
    */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $comicData = $request ->validated();

        $comic -> update($comicData);

        return redirect() -> ruote('comics.show',['comic' => $comic ->id]);
    }
    /* -------------- FINE UPDATE -------------- */

    /*
        D - DELETE
    */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic -> delete();

        return redirect() -> route('comics.index');
    }
    /* -------------- FINE DELETE -------------- */
}
