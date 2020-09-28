<?php

namespace App\Http\Controllers\Site;

use App\Models\Specialties;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialtiesController extends Controller
{
    // get 
    public function index()
    {
        $specialties = Specialties::with('user')->orderBy('created_at', 'desc')->where('active', 1)->get()->map(function($specialtie){
            $specialtie->image = config('app.url').'specialties/'.$specialtie->image;
            return $specialtie;
        });
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $specialties]);
    }
}
