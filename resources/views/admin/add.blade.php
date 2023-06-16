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
                        <form class="mt-3" action="{{route('create-blog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="blog_title" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Author</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="blog_author" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="blog_image" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Description</label>
                                <div class="col-md-9">
                                    <textarea name="blog_description" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

