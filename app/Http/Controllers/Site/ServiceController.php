<?php

namespace App\Http\Controllers\Site;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    // get 
    public function index()
    {
        $services = Service::with('user')->orderBy('created_at', 'desc')->where('active', 1)->paginate(6);
        $services->map(function($service){
            $service->image = config('app.url').'servies/'.$service->image;
        });
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $services]);
    }

    // find
    public function find($id)
    {
        $service = Service::find($id);
        $service->image = config('app.url').'servies/'.$service->image;
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $service]);
    }
}
