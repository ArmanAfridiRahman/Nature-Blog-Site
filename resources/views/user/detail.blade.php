@extends('master')
@section('title')
    User || {{$blog->blog_title}}
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{asset($blog->blog_image)}}" alt="" class="w-100">
                </div>
            </div>
             <div class="row">
                <div class="col">
                    <div class="card card-body">

                        <h1>{{$blog->blog_title}}</h1>
                        <h3>{{$blog->blog_author}}</h3>
                        <p>{{$blog->blog_description}}</p>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

