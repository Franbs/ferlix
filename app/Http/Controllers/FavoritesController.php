<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MovieController;


class FavoritesController extends Controller
{


    public function index(Request $request, MovieController $movieController)
    {
        return view('user.favorites')->with('movies', $movieController->getFavorites($request));
    }

    public function store(Request $request, MovieController $movieController, $id)
    {
        $favorites = $request->session()->get('favoriteList', []);

        // dd($movieController->stream($id)[0]["type"]);
        if ($movieController->stream($id)[0]["type"] == "serie")
            dd("a");

        array_push($favorites, $id);
        $request->session()->put('favoriteList', $favorites);
        return redirect(url()->previous());
    }

    public function destroy(Request $request, $id)
    {
        $favoriteList = $request->session()->get("favoriteList", []);

        if (is_null($id)) {
            $request->session()->forget("favoriteList");
        } else {
            foreach ($favoriteList as $key => $value) {
            var_dump($value, $id);
               if ($value == $id) {
                   var_dump("y");
                   unset($favoriteList[$key]);
                   break;
               }
            }
        }

        $request->session()->put("favoriteList", $favoriteList);
        return redirect(url()->previous());
    }

    
}
