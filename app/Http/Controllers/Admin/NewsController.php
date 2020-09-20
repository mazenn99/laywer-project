<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // return all active news
    public function index()
    {
        return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $this->get() ]);
    }

    //store
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|string',
         ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }
        News::create($request->all() + ['active' => 1]);
        return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $this->get() ]);
    }
    
    // getAll
    public function get()
    {
        return News::where('active', 1)->get();
    }
}
