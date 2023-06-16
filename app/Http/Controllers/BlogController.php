<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Slider;

class BlogController extends Controller
{
    private $blogs, $blog, $sliders, $slider;


    public function index()
    {
        return view('admin.dashboard');
    }
    public function create()
    {
        return view('admin.add');
    }
    public function slider()
    {
        return view('admin.add-slider');
    }
    public function manage(Request $request)
    {
        $this->blogs = Blog::all();
        return view('admin.manage', ['blogs' => $this->blogs]);
    }
    public function createBlog(Request $request)
    {
        Blog::newBlog($request);
        return back()->with('message', 'Added a new product');
    }
    public function editBlog(Request $request, $id)
    {
        $this->blog = Blog::find($id);
        return view('admin.edit', ['blog' => $this->blog]);
    }
    public function updateBlog(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage-blog')->with('message', 'Blog updated Successfully');
    }
    public function deleteBlog($id)
    {
        Blog::deleteBlog($id);
        return back()->with('message', 'Deleted Blog Successfully.');
    }

}
