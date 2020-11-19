<?php

namespace App\Http\Controllers\Site\Visitor;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Service;
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
        $services =  Service::orderBy('id' , 'DESC')->get();
        return view('visitor.services' , compact('services'));
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

    public function singleNews($id) {
        $service = Service::find($id);
        return view('visitor.single-news' , compact('service'));
    }

    public function facilityNews() {
        return view('visitor.facility-news');
    }

    public function sendEmail(Request $request) {
        return redirect()->back();
    }
}
