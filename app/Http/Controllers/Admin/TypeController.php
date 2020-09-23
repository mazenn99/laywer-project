<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    //get all
    public function index()
    {
        $types = Type::whereIn('id',[1,2,3,4])->get();
        return response()->json(['resourceCode' => 100, 'responseMessage' => 'success', 'data' => $types]);
    }

    public function orderType()
    {
        $types = Type::whereIn('id',[5,6])->get();
        return response()->json(['resourceCode' => 100, 'responseMessage' => 'success', 'data' => $types]);
    }
}
