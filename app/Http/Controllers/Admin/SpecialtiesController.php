<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Specialties;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SpecialtiesController extends Controller
{
    //get
    public function index()
    {
        $specialties = Specialties::with('user')->orderBy('created_at', 'desc')->paginate(50);
        $specialties->map(function($specialtie){
            $specialtie->image = config('app.url').'specialties/'.$specialtie->image;
        });
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $specialties]);
    }

    // find 
    public function find($id)
    {
        return Specialties::find($id);
    }

    //  change service status
    public function changeStatus($id)
    {
        $specialties = $this->find($id);
        $specialties->active = ($specialties->active == 1) ? 0 : 1 ;
        $specialties->update();
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'active' => $specialties->active]);
    }

    //store 
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
           'subject' => 'required|string',
           'image' => 'required|image'
        ]);
       if($validator->fails()){
           return response()->json($validator->messages(), 200);
       }

       $data = $request->all(); 
       $data['active'] = 1;
       $data['user_id']= Auth::user()->id;


       if ($request->hasFile('image')) {
           $file = $request->image;
           $file_name =md5(pathinfo($file, PATHINFO_FILENAME));
           $extension = $file->extension();
           $full_name = $file_name.'.'.$extension;
           $file->move('specialties', $full_name);
           $data['image'] = $full_name;
       }
       Specialties::create($data);
       return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $this->index()]);
    }

    //update 
    public function update(Request $request, $id)
    {
       $validator = Validator::make($request->all(), [
           'subject' => 'required|string',
           'image' => 'nullable|image'
        ]);
       if($validator->fails()){
           return response()->json($validator->messages(), 200);
       }

       $specialties = $this->find($id);
       $specialties->subject   = $request->subject ;

       if ($request->hasFile('image')) {
           $file = $request->image;
           $file_name =md5(pathinfo($file, PATHINFO_FILENAME));
           $extension = $file->extension();
           $full_name = $file_name.'.'.$extension;
           $file->move('specialties', $full_name);
           $specialties->image = $full_name;
       }
       $specialties->update();

       return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $this->index()]);
    }
}
