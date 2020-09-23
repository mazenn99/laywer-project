<?php

namespace App\Http\Controllers;

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
        $news = News::get();
        return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $news]);
    }

    // getAll
    public function get()
    {
        return News::where('active', 1)->get();
    }
}
