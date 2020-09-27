<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    //get
    public function index()
    {
        $services = Service::with('user')->orderBy('created_at', 'desc')->paginate(50);
        $services->map(function($service){
            $service->image = config('app.url').'servies/'.$service->image;
        });
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $services]);
    }

    // find 
    public function find($id)
    {
        return Service::find($id);
    }

    //  change service status
    public function changeStatus($id)
    {
        $service = $this->find($id);
        $service->active = ($service->active == 1) ? 0 : 1 ;
        $service->update();
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'active' => $service->active]);
    }

    //store 
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
           'subject' => 'required|string',
           'text' => 'required|string',
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
           $file->move('servies', $full_name);
           $data['image'] = $full_name;
       }
       Service::create($data);
       return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $this->index()]);
    }

    //update 
    public function update(Request $request, $id)
    {
       $validator = Validator::make($request->all(), [
           'subject' => 'required|string',
           'text' => 'required|string',
           'image' => 'nullable|image'
        ]);
       if($validator->fails()){
           return response()->json($validator->messages(), 200);
       }

       $servie = $this->find($id);
       $servie->subject   = $request->subject ;
       $servie->text      = $request->text;

       if ($request->hasFile('image')) {
           $file = $request->image;
           $file_name =md5(pathinfo($file, PATHINFO_FILENAME));
           $extension = $file->extension();
           $full_name = $file_name.'.'.$extension;
           $file->move('servies', $full_name);
           $servie->image = $full_name;
       }
       $servie->update();

       return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $this->index()]);
    }
}
