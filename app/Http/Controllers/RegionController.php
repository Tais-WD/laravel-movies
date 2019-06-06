<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegionController extends Controller
{
    /**
     * list of all regions in the database
     */
    public function index()
    {
        $regions = DB::select( 'SELECT * 
                                FROM `region`
                                ORDER BY `name` ASC');

        
        $regions_view = view('regions/index', [
            'regions' => $regions
        ]);

        // wrap the view in html_wrapper 
        // (common for all pages about regions)
        return view('regions/html_wrapper', [
            'content' => $regions_view
        ]);
    }

    public function westernEurope()
    {
        $region = DB::selectOne("
            SELECT *
            FROM `region`
            WHERE `slug` = 'western-europe'
        ");

        var_dump($region);
    }

    public function pictures()
    {
        $pictures = 'A view with pictures';

        return view('regions/html_wrapper', [
            'content' => $pictures
        ]);
    }
}
