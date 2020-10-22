<?php

namespace App\Http\Controllers\Site;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    //get all
    public function index()
    {
        $links = Link::get()->map(function($link){
            $link->date =  date("d-m-Y", strtotime($link->created_at)); 
            return $link;
        });
        return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $links]);
    }

    // getAll
    public function get()
    {
        return Link::where('active', 1)->get();
    }
}
