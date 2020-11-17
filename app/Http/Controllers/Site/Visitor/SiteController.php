<?php

namespace App\Http\Controllers\Site\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('visitor.index');
    }

    public function about() {
        return view('visitor.about');
    }

    public function special() {
        return view('visitor.special');
    }

    public function order() {
        return view('visitor.order');
    }

    public function askConsulting() {
        return view('visitor.ask-consult');
    }

    public function report() {
        return view('visitor.report');
    }

    public function services() {
        return view('visitor.services');
    }

    public function blogs() {
        $articles = Article::orderBy('id' , 'DESC')->get();
        return view('visitor.blog' , compact('articles'));
    }

    public function lawNews() {
        return view('visitor.law-news');
    }

    public function laws() {
        return view('visitor.laws');
    }

    public function ourServices() {
        return view('visitor.ourServices');
    }
}
