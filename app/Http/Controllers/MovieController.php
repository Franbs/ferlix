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
        
        $movie->idIn(array($id));

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


        return view('billboard')->with('movies', $movies->get("movies.*"));
    }

    public function getFavorites(Request $request)
    {
        $movies = $this->moviesModel->query();

        $movies->idIn($request->session()->get("favoriteList", []))->whereIN("episodio", [null, 1]);
        
        return $movies->get();
    }

    public function getChaptersOfSerie($id)
    {
        $movies = $this->moviesModel->query();
        $movie = $this->moviesModel->query();
        $movie->where("id", $id);
        // dd($movie->get("serie_id")[0]["serie_id"]);
        $movies->chaptersOfSerie($movie->get("serie_id")[0]["serie_id"]);
        // dd($movies->get());
        return $movies->get();
    }

    public function store(Request $request)
    {
        // id 	title 	year 	synopsis 	duration 	type 	image 	file 	serie_id 	episodio 	
        if (!$request->input('title') || !$request->input('year') || !$request->input('synopsis') || !$request->input('duration') || !$request->input('type') || !$request->input('image') || !$request->input('file')) {
            return response()->json(['errors' => array(["Status" => "fail", 'code' => 422, 'message' => 'Data missing'])], 422);
        }

        if (($request->input('type') == 'serie') && (!$request->input('serie_id') || !$request->input('serie_id'))) {
            return response()->json(['errors' => array(["Status" => "fail", 'code' => 422, 'message' => 'Data missing'])], 422);
        }

        $movie = Movie::create($request->all());
        return response()->json($movie, 200);
    }

    public function viewWithId(Request $request)
    {
        $movie = Movie::find($request->id);

        if (!$movie) {
            return response()->json(['errors' => array(['code' => 404, 'message' => 'Product not found'])], 404);
        }

        return response()->json($movie, 200);
    }
}
