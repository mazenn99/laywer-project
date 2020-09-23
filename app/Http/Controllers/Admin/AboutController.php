<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
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
         About::create($request->all());
         return response()->json(['resourceCode' =>100, 'resourceMessage' => 'success', 'data' => $this->get() ]);
     }
 
     // getAll
     public function get()
     {
         return About::get();
     }
 
 
     // find 
     public function find($id)
     {
         return About::find($id);
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
         $about = $this->find($id);
         $about->text = $request->text;
         $about->update();
         $this->index();
     }
 
}
