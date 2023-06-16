<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class MainController extends Controller
{
    private $blogs, $blog;
    public function index()
    {
        $this->blogs = Blog::all();
        return view('user.home', ['blogs' => $this->blogs]);
    }
    public function detail($id)
    {
        $this->blog = Blog::find($id);
        return view('user.detail', ['blog'=>$this->blog]);
    }
    public function about()
    {
        return view('user.about');
    }
}
