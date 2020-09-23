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
        return News::get();
    }


    // find 
    public function find($id)
    {
        return News::find($id);
    }

    //update  
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|string',
         ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }
        $news = $this->find($id);
        $news->text = $request->text;
        $news->update();
        $this->index();
    }


    // change status
    public function changeStatus($id)
    {
        $news = $this->find($id);
        $news->active = ($news->active == 1) ? 0 : 1 ;
        $news->update();
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'active' => $news->active]);
    }
}
