<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // get atricles
    public function index()
    {
        $articles = Article::with('user','type')->paginate(5);
        $articles->map(function($article){
            $article->image = config('app.url'). 'article/'.$article->image;
        });
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $articles]);
    }

     //find article
     public function find($id)
     {
        $article = $this->findArticle($id);
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $article]);
     }


     //store article
     public function store(Request $request)
     {
        $validator = Validator::make($request->all(), [
            'author' => 'required|string',
            'subject' => 'required|string',
            'text' => 'required|string',
            'type_id' => 'required|string',
            'author' => 'required|string',
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
            $file->move('article', $full_name);
            $data['image'] = $full_name;
        }
        Article::create($data);
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $this->index()]);
     }

    //  change article status
    public function changeStatus($id)
    {
        $article = $this->findArticle($id);
        $article->active = ($article->active == 1) ? 0 : 1 ;
        $article->update();
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success']);
    }

    // find
    public function findArticle($id)
    {
        return Article::with('user','type')->find($id);
    }
}
