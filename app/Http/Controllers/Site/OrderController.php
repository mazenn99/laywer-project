<?php

namespace App\Http\Controllers\Site;

use Validator;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    
    // store
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|string',
            'text' => 'required|string',
            'type_id' => 'required|string',
         ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }
        $data = $request->all();
        $data['active'] = 0 ;
        Order::create($data);
        return response()->json(['responseCode' => 100, 'responseMessage' => 'success']);
    }
}
