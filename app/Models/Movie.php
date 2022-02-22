<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Movie extends Model
{
    use  HasFactory;
    protected $fillable  = ['title', 'year', 'synopsis', 'duration', 'type', 'image', 'file'];
    public $timestamps = false;

    // Show all the series and the first chapter of series
    public function scopeIndex($query)
    {
        return $query->where("movies.episodio", 1)->orWhere("movies.type", "pelicula");
    }

    public function scopeGenre($query, $input)
    {
        return $query
            ->join('genresXmovie', 'movies.id', '=', 'genresXmovie.movie_id')
            ->join('genres', 'genresXmovie.genre_id', '=', 'genres.id')
            ->where('genres.name', $input);
    }

    public function scopeSortDate($query, $input) {
        return $query->orderBy('year', $input);
    }

    public function scopeType($query, $input)
    {
        return $query->where('movies.type', $input);
    }

    public function scopeSearch($query, $input)
    {
        return $query->where(strtolower('title'),'like', '%' . strtolower($input) . '%' );
    }

    public function scopeIdIn($query, $input)
    {
        return $query->whereIn("movies.id", $input);
    }

    public function scopeFirstChapter($query)
    {
        return $query->where("movies.episodio", 1);
    }

    public function scopeChapter($query, $input)
    {
        return $query->where("movies.episodio", $input)->where("movies.serie_id", "series.id");
    }

    public function scopeSerie($query, $input)
    {
        return $query->rightJoin('series', 'movies.serie_id', '=', 'series.id')->where("movies.id", $input);
    }

    public function scopeSeries($query)
    {
        return $query->rightJoin('series', 'movies.serie_id', '=', 'series.id');
    }

    public function scopeChaptersOfSerie($query, $id_serie)
    {
        return $query->where("serie_id", $id_serie);
    }

}
