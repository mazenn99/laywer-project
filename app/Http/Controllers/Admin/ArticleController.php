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
        if (request()->typeId) {
            $articles = Article::where('type_id',request()->typeId)->orderBy('created_at', 'desc')->with('user','type')->paginate(50);
        }else{
            $articles = Article::with('user','type')->orderBy('created_at', 'desc')->paginate(50);
        }
        
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


     //update article
     public function update(Request $request, $id)
     {
        $validator = Validator::make($request->all(), [
            'author' => 'required|string',
            'subject' => 'required|string',
            'text' => 'required|string',
            'type_id' => 'required|string',
            'author' => 'required|string',
            'image' => 'nullable|image'
         ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $article = $this->findArticle($id);
        $article->author    = $request->author ;
        $article->subject   = $request->subject ;
        $article->type_id   = $request->type_id ;
        $article->text      = $request->text;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $file_name =md5(pathinfo($file, PATHINFO_FILENAME));
            $extension = $file->extension();
            $full_name = $file_name.'.'.$extension;
            $file->move('article', $full_name);
            $article->image = $full_name;
        }
        $article->update();

        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $this->index()]);
     }

    //  change article status
    public function changeStatus($id)
    {
        $article = $this->findArticle($id);
        $article->active = ($article->active == 1) ? 0 : 1 ;
        $article->update();
        return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'active' => $article->active]);
    }

    // find
    public function findArticle($id)
    {
        return Article::with('user','type')->find($id);
    }
}
