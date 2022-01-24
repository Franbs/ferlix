<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{

    public function index(Request $request)
    {
        return view('user.favorites')->with('favoriteList', $request->session()->get('favoriteList'));
    }

    public function store(Request $request, $id)
    {
        $favorites = $request->session()->get('favoriteList', []);
        // array_push($favorites, $request->input('movieID'));
        array_push($favorites, $id);
        $request->session()->put('favoriteList', $favorites);
        return redirect(url()->previous());
    }

    public function destroy(Request $request)
    {
        $request->session()->forget("favoriteList");
        return redirect(url()->previous());
    }
}
