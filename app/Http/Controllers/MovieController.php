<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public $movieModel;

    public function __construct() {
        $this->movieModel = new Movie();
    }

    public function list() {
        return view("user.favorites");
    }
}
