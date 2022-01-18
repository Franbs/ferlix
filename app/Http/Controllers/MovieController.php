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
        $request->flash();

        $movies = $this->moviesModel->query();

        if ($request->filled('genre')) {
            $movies->genre($request->input('genre'));
        }

        /*if ($request->filled('priceMax')) {
            $movies->priceMax($request->input('priceMax'));
        }

        if ($request->filled('name')) {
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
}
