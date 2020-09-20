<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    // get atricles
    public function index()
    {
        $articles = Article::with('user','type')->paginate(5);
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $articles]);
    }

     //find article
     public function find(Article $article)
     {
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $article]);
     }


     //store article
     public function store(Request $request)
     {
         $data[] = $request->all(); 
         Article::create($data);
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $article]);
     }
}
