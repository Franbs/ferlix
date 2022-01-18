<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Movie extends Model
{
    public function scopeGenre($query, $input)
    {
        return $query
            ->join('genresXmovie', 'movies.mo_id', '=', 'genresXmovie.movie_id')
            ->join('genresXmovie', 'genresXmovie.genre_id', '=', 'genres.id')
            ->where('genre', $input);

        // $shares = DB::table('gen')->join('genres', 'genres.id', '=', 'movies')

        // return $query->where('genre', $input);
    }

    public function scopeJoinGenre($query)
    {
        return $query->Leftjoin('genres', 'movies.category_id', '=', 'categories.id');
    }
}
