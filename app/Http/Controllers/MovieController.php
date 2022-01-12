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
        $search = $request->input('search');

        $users = DB::table('movies')
                ->where('title', '=', '%'.$search.'%')
                ->get();

        return view('billboard', compact('movies'));
    }
}
