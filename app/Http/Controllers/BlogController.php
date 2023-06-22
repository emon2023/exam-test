<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog, $blogs;

    public function index()
    {
        return view('blog.add');
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);
        Blog::newBlog($request);
        return back()->with('message','Blog Info Create Successfully');
    }

    public function manage()
    {
        $this->blogs = Blog::all();
        return view('blog.manage',['blogs'=>$this->blogs]);
    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        return view('blog.edit',['blog'=>$this->blog]);
    }

    public function update(Request $request, $id)
    {
        Blog::updateBlog($request,$id);
        return redirect('/blog/manage')->with('message','Blog Info Update Successfully');
    }

    public function delete($id)
    {
        Blog::deleteBlog($id);
        return back()->with('message','Blog Info Delete Successfully');
    }
}
