<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        if(isset($request->searchValue)){
            $param = $request->searchValue;
            // dd($param);
            $response = Http::get('http://www.omdbapi.com/?i=tt3896198&apikey=62dfad6b&s='.$param.'&type=movie');
            $result = json_decode($response->body());
            if(isset($result->Search))
                $data = $result->Search;
            else
                $data = [];
        }
        // dd($data);
        return  view('movie_search', compact('data'));
    }
}
