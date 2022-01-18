<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function scopeGenre($query, $input)
    {
        $shares = DB::table('gen')
        ->join('genres', 'genres.id', '=', 'movies');

        return $query->where('genre', $input);
    }

    public function scopeJoinGenre($query)
    {
        return $query->Leftjoin('genres', 'movies.category_id', '=', 'categories.id');
    }
}
