<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public $moviesModel;
    public function __construct()
    {
        $this->moviesModel = new Movie();
    }

    public function list()
    {
        return view("/billboard")->with(["movies"=>$this->moviesModel->all()]);
    }
}
