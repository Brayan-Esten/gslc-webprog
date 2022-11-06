<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index(){
        $movies = [
            [
                'title' => 'The Matrix 2021',
                'year' => '2021',
                'genre' => 'Action',
                'url' => 'matrix-resurrections.jpg'
            ],
            [
                'title' => 'A Quiet Place',
                'year' => '2018',
                'genre' => 'Horror',
                'url' => 'a-quiet-place.jpg'
            ],
            [
                'title' => 'Black Adam',
                'year' => '2022',
                'genre' => 'Superhero',
                'url' => 'black-adam.jpg'
            ]
        ];

        return view('index', [
            'movies' => $movies
        ]);


    }
}
