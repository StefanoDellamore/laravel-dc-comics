<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Termwind\Components\Dd;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicsData = config('comic');

        foreach ($comicsData as $index => $singleComic) {
            $comic = new Comic();
            $comic->title = $singleComic ['title'];
            $comic->description = $singleComic ['description'];
            $comic->thumb = $singleComic ['thumb'];
            $comic->price = $singleComic ['price'];
            $comic->series = $singleComic ['series'];
            $comic->sale_date = $singleComic ['sale_date'];
            $comic->type = $singleComic ['type'];
            //$comic->artists = $singleComic ['artists'];
            //$comic->writers = $singleComic ['writers'];
            $comic->save();
        }
    }
}
