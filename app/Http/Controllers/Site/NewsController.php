<?php

namespace App\Http\Controllers\Site;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get()->map(function($new){
            $new->date =  date("d-m-Y", strtotime($new->created_at)); 
            return $new;
        });
        return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $news]);
    }

    // getAll
    public function get()
    {
        return News::where('active', 1)->get();
    }
}
