<?php

namespace App\Http\Controllers\Site;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = About::first();
        return response()->json(['responseCode' => 100, 'responseMessage' => 'success', 'data' => $data]);
    }

    

}
