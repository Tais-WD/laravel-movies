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

    public function detail()
    {
        // 16. - prepare the data (pretend to take it from DB)
        $movie_title = 'Venom or how I became a monster';


        // 9.
        $info_view = view('movies/detail/info', [
            'title' => $movie_title
        ]);

        // 10.
        $cast_view = view('movies/detail/cast');

        // 11.
        $trailer_view = view('movies/detail/trailer');

        // 12.
        $main_view = view('movies/detail/main', [
            'info'      => $info_view,
            'cast'      => $cast_view,
            'trailer'   => $trailer_view
        ]);

        // 13.
        $html_wrapper = view('movies/html_wrapper', [
            'header'  => view('movies/header'),
            'footer'  => view('movies/footer'),
            'content' => $main_view
        ]);

        return $html_wrapper;
    }
}
