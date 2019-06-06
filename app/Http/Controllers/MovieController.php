<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        $top_rated = view('movie/top-rated');

        $movie_of_week = view('movie/movie-of-the-week');

        $content = view('movie/content', [
            'top_rated_view' => $top_rated,
            'movie_of_week' => $movie_of_week
        ]);

        $view = view('movie/index', [
            'content' => $content
        ]);

        return $view;
    }

    public function index2()
    {
        return view('movie/index', [
            'top_rated_view' => view('movie/top-rated')
        ]);
    }


    public function index3()
    {
        $top_rated = view('movie/top-rated');

        $movie_of_week = view('movie/movie-of-the-week');

        // pass multiple pieces of content as an array
        $view = view('movie/index', [
            'content' => [
                $movie_of_week,
                $top_rated
            ]
        ]);

        return $view;
    }
}
