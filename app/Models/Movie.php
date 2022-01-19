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
            ->join('genres', 'genresXmovie.genre_id', '=', 'genres.id')
            ->where('genres.name', $input);
    }

    public function scopeJoinGenre($query)
    {
        return $query->Leftjoin('genres', 'movies.category_id', '=', 'categories.id');
    }
}
