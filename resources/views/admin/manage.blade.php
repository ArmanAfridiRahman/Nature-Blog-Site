@extends('master')
@section('title')
    Admin || Manage blog Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body border-0 shadow">
                        <h1 class="text-center">Manage Blogs</h1>
                        <p class="text-center">{{session('message')}}</p>
                        <table class="table table-responsive-sm table-hover mt-4">
                            <thead>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->blog_title}}</td>
                                    <td>{{$blog->blog_author}}</td>
                                    <td>
                                        <img src="{{asset($blog->blog_image)}}" height="50" width="80">
                                    </td>
                                    <td>{{$blog->blog_description}}</td>
                                    <td>
                                        <a href="{{route('edit-blog', [$blog->id])}}" class="btn btn-success">Edit</a>
                                        <a href="{{route('delete-blog', [$blog->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to do delete the blog?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

