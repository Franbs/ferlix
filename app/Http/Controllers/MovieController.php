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

    public function billboard()
    {
        return view("/billboard")->with(["movies"=>$this->moviesModel->all()]);
    }

    public function favorites()
    {
        return view("/user.favorites")->with(["movies"=>$this->moviesModel->all()]);
    }
}
