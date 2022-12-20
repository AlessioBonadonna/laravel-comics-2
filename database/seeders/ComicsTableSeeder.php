<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db_seed.comics');
        foreach ($comics as $comic) {
            $new_comic = new Comic;
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->piece = $comic['piece'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            foreach ($comic['artists'] as $key => $artist) {
                if ($key < (count($comic['artists']) - 1)) {
                    $new_comic->artists .= $artist . ',';
                } else {
                    $new_comic->artists .= $artist;
                }
            }
            foreach ($comic['writers'] as $key => $writers) {
                if ($key < (count($comic['writers']) - 1)) {
                    $new_comic->writers .= $writers . ', ';
                } else {
                    $new_comic->writers .= $writers;
                }
            }
            $new_comic->save();
        }
    }
}