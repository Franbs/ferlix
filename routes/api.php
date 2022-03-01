<?php

use App\Http\Controllers\MovieController;
use App\Http\Resources\MovieCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserCollection;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return new UserCollection(User::all());
});

Route::get('/billboard', function () {
    return new MovieCollection(Movie::all());
});

Route::post('/movie', [MovieController::class, 'store']);

Route::put('/updateMovie', [MovieController::class, 'updateMovie']);

Route::get('/movieDel/{id}', [MovieController::class, 'deleteMovie']);

Route::middleware(["auth:sanctum"])->group(function () {
    Route::get('/stream/{id}', [MovieController::class, 'viewWithId']);
});


/*
Route::post("/login", function (Request $request) {
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
        'remember_me' => 'boolean'
    ]);

    $credentials = request(['email', 'password']);
    if (!Auth::attempt($credentials))
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    else {
        $userRol = $request->user()["rol"];
        $token = $request->user()->createToken("token-" . $request["email"], [strval($userRol)]);

        return response()->json(
            ["token" => $token->plainTextToken],
            200
        );
    }
});

Route::middleware(["auth:sanctum"])->group(function () {
    Route::get("/movies", function () {
        return new MovieCollection(Movie::all());
    });
    Route::get("/movies/{id}", function ($id) {
        return new MovieResource(Movie::find($id));
    });
    Route::get('/stream/{id}', [MovieController::class, 'viewWithId']);
});

Route::middleware(["auth:sanctum", "abilities:admin"])->group(function () {
    Route::post("/movies", [MovieController::class, "store"]);
    Route::put("/movies/{id}", [MovieController::class, "update"]);
    Route::delete("/movies/{id}", [MovieController::class, "destroy"]);
});
*/