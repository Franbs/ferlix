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

        $var = $movieController->getChaptersOfSerie($id);

        if ($movieController->stream($id)[0]["type"] == "serie") {
            for ($i = 0; $i < sizeof($var); $i++) {
                array_push($favorites, $var[$i]["id"]);
            }
        } else {
            array_push($favorites, $id);
        }

        $request->session()->put('favoriteList', $favorites);

        return redirect(url()->previous());
    }

    public function destroy(Request $request, $id = null)
    {
        $favoriteList = $request->session()->get("favoriteList", []);
        // dump($favoriteList);
        
        if (is_null($id)) {
            
            $request->session()->forget("favoriteList");
        } else {
            foreach ($favoriteList as $key => $value) {
                if ($value == $id) {
                    unset($favoriteList[$key]);
                    break;
                }
            }
        }

        $request->session()->put("favoriteList", $favoriteList);
        return redirect(url()->previous());
    }
}
