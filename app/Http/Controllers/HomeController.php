<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $blog, $blogs,$categories;

    public function index()
    {
        $this->blogs = Blog::all();
        return view('home.index',['blogs'=>$this->blogs]);
    }

    public function detail($id)
    {
        $this->blog = Blog::find($id);
        return view('home.detail',['blog'=>$this->blog]);
    }
}
