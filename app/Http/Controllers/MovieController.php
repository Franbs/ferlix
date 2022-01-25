<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public $moviesModel;
    
    public function __construct()
    {
        $this->moviesModel = new Movie();
    }

    public function billboard()
    {
        return view("/billboard")->with(["movies"=>$this->moviesModel->all()]);
    }
    
    public function search(Request $request) {
        // dd($request);
        // var_dump($request);
        $request->flash();

        $movies = $this->moviesModel->query();

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

        /*if ($request->filled('name')) {
            $movies->name($request->input('name'));
        }

        if ($request->filled('category')) {
            $movies->category($request->input('category'));
        }*/

        // $movies->joinGenre();

        return view('billboard')->with('movies', $movies->get());

        /*$search = $request->input('search');

        $users = DB::table('movies')
                ->where('title', '=', '%'.$search.'%')
                ->get();

        return view('billboard', compact('movies'));*/
    }

    public function getFavorites(Request $request)
    {
        $movies = $this->moviesModel->query();

        $movies->idIn($request->session()->get("favoriteList"));
        
        return $movies->get();
    }
}
