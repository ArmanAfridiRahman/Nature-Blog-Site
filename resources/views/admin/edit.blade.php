@extends('master')
@section('title')
    Admin || Add blog Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body border-0 shadow">
                        <h1 class="text-center secondary-color">Add Blog</h1>
                        <p class="text-center">{{session('message')}}</p>
                        <hr/>
                        <form class="mt-3" action="{{route('update-blog', ['id' => $blog->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="blog_title" value="{{$blog->blog_title}}" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Author</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="blog_author" value="{{$blog->blog_author}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="blog_image" >
                                    <img src="{{asset($blog->blog_image)}}" class="" height="80" width="60">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea name="blog_description" class="form-control" >{{$blog->blog_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-primary" value="Update Blog">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

