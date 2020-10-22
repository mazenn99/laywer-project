<?php

namespace App\Http\Controllers\Admin;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    // get all linkController
    public function index()
    {
        return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $this->get() ]);
    }

    public function get()
    {
        return Link::all();
    }

    //store
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'link' => 'required|string',
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }
        Link::create($request->all() + ['active' => 1, 'user_id' => Auth::user()->id]);
        return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $this->get() ]);
    }

     // find 
     public function find($id)
     {
         return Link::find($id);
     }

     //update  
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'link' => 'required|string',
         ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }
        $link = $this->find($id);
        $link->name = $request->name;
        $link->link = $request->link;
        $link->update();
        $this->index();
    }

    // change status
    public function changeStatus($id)
    {
        $link = $this->find($id);
        $link->active = ($link->active == 1) ? 0 : 1 ;
        $link->update();
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'active' => $link->active]);
    }
}
