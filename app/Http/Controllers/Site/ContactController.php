<?php

namespace App\Http\Controllers\Site;

use Validator;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    // store    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required|string',
            'email' => 'nullable|string|email',
            'phone' => 'required',
            'text'  => 'required'
         ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }
        $data = $request->all();
        $data['active'] = 0;
        Contact::create($data);
        return response()->json(['resourceCode' => 100, 'resourceMessage' => 'success']);
    }

}
