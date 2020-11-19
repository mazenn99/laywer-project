<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($typeId)
    {
        $articles = Article::where('type_id', $typeId)->with('user','type')->where('active',1)->paginate(3);
        $articles->map(function($article){
            $article->image = config('app.url').'article/'.$article->image;
            $newDate = date("d-m-Y", strtotime($article->created_at));
            $article->date = $newDate;
        });
        #return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $articles]);
        return view('visitor.blog-detail' , [
            'resourceCode' => '100',
            'resourceMessage' => 'success',
            'data' => $articles
        ]);
    }

    public function show($id)
    {
        $article = Article::with('user','type')->find($id);
        $article->image = config('app.url').'article/'.$article->image ;
        $article->date = date("d-m-Y", strtotime($article->created_at));
        #return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $article]);
        // return response()->json(['resourceCode' => '100', 'resourceMessage' => 'success', 'data' => $article]);
        return view('visitor.blog-detail' , compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
