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
        DB::table('movies')->insert([ 
            'title' => 'The Godfather', 
            'year' => 1972, 
            'synopsis' => 'The Godfather synopsis', 
            'duration' => '2h 55m', 
            'type' => 'idk', 
            'image' => 'http://localhost/img/billboard/godfather.jpg', 
            'file' => 'http://localhost/videos/godfather.mp4'
        ]);
        DB::table('movies')->insert([ 
            'title' => 'Soy leyenda', 
            'year' => 2002, 
            'synopsis' => 'Soy leyenda synopsis', 
            'duration' => '2h 05m', 
            'type' => 'film', 
            'image' => 'http://localhost/img/billboard/soy_leyenda.jpeg', 
            'genre' => 'Adventure, Action', 
            'file' => 'idk2'
        ]);
        
        
    }
}

class UserSeeder extends Seeder 
{
    public function run() 
    {
        //id 	name 	userName 	email 	hash 	rol 	auth 	block 	creditcard
        DB::table('users')->insert([ 
            'name' => 'Fran', 
            'email' => 'francescbs@gmail.com', 
            'password' => Hash::make('Hola123'), 
        ]);
    }
}
