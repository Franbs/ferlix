<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class MovieController extends Controller
{
    public $moviesModel;
    
    public function __construct()
    {
        $this->moviesModel = new Movie();
    }

    public function billboard()
    {
        $movies = $this->moviesModel->query();

        //return view("/billboard")->with(["movies"=>$this->moviesModel->all()]);
        return view('/billboard')->with('movies', $movies->index()->get("movies.*"));
    }

    public function stream($id)
    {
        // $request->flash();

        $movie = $this->moviesModel->query();
        // if (!isNull($id)) {
            $movie->idIn(array($id));
        // }
        // dd($movie->get());
        return $movie->get();
    }
    
    public function search(Request $request) {
        // dd($request);
        // var_dump($request);
        $request->flash();

        $movies = $this->moviesModel->query();
        
        $movies->index();

        if ($request->filled('genre')) {
            $movies->genre($request->input('genre'));
        }

        if ($request->filled('dateSort')) {
            $movies->sortDate($request->input('dateSort'));
        }
       

        if ($request->filled('type')) {
            $movies->type($request->input('type'));
        }

        if ($request->filled('search')) {
            $movies->search($request->input('search'));
        }

        // $movies->joinGenre();

        return view('billboard')->with('movies', $movies->get("movies.*"));

        /*$search = $request->input('search');

        $users = DB::table('movies')
                ->where('title', '=', '%'.$search.'%')
                ->get();

        return view('billboard', compact('movies'));*/
    }

    public function getFavorites(Request $request)
    {
        $movies = $this->moviesModel->query();

        $movies->idIn($request->session()->get("favoriteList", []));
        
        return $movies->get();
    }
}
