<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MovieSeeder::class);
        $this->call(UserSeeder::class);
    }
}

class MovieSeeder extends Seeder 
{
    public function run() 
    {
        //id 	title 	year 	synopsis 	duration 	type 	image 	genre 	file
        DB::table('movies')->insert(['id' => 0, 
            'title' => 'The Godfather', 
            'year' => 1972, 
            'synopsis' => 'The Godfather synopsis', 
            'duration' => '2h 55m', 
            'type' => 'idk', 
            'image' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UY98_CR1,0,67,98_AL_.jpg', 
            'genre' => 'Crime, Drama', 
            'file' => 'idk2'
        ]);
    }
}

class UserSeeder extends Seeder 
{
    public function run() 
    {
        //id 	name 	userName 	email 	hash 	rol 	auth 	block 	creditcard
        DB::table('users')->insert(['id' => 0, 
            'name' => 'Fran', 
            'userName' => 'Franbs', 
            'email' => '12francescbs@gmail.com', 
            'password' => 'Hola123', 
            'rol' => 'idk', 
            'auth' => 'yes', 
            'block' => false, 
            'creditcard' => 'aaa'
        ]);
    }
}
