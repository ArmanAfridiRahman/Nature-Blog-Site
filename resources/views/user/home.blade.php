@extends('master')
@section('title')
    User || Home Page
    @endsection
@section('body')
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0">
                        <div class="carousel slide carousel-fade" id="slider" data-bs-ride="carousel" data-bs-interval="3000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('/')}}assets/img/home/bonsai_one.jpg" alt="" class="rounded-4 w-100">
                                    <div class="carousel-caption d-none d-lg-block my-caption">
                                        <div class="card card-body bg-white border-0 shadow float-end bg-opacity-75">
                                            <h1 class="secondary-color text-start fw-bolder text-center">Our Nursery</h1>
                                            <p class="text-black text-start ps-4">nursery, place where plants are grown for transplanting, for use as stock for budding and grafting, or for sale. Commercial nurseries produce and distribute woody and herbaceous plants, including ornamental trees, shrubs, and bulb crops.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('/')}}assets/img/home/bonsai_three.jpg" alt="" class="rounded-4 w-100">
                                    <div class="carousel-caption d-none d-lg-block my-caption">
                                        <div class="card card-body bg-white border-0 shadow float-end bg-opacity-75">
                                            <h1 class="secondary-color text-start fw-bolder text-center">Our Nursery</h1>
                                            <p class="text-black text-start ps-4">nursery, place where plants are grown for transplanting, for use as stock for budding and grafting, or for sale. Commercial nurseries produce and distribute woody and herbaceous plants, including ornamental trees, shrubs, and bulb crops.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center fw-bold mb-5">Blogs</h1>
                @foreach($blogs as $blog)
                <div class="col-md-6">
                    <a href="{{route('detail', ['id' => $blog->id])}}" class="text-decoration-none">
                        <div class="card grow-2">
                            <div class="card-body">
                                <img src="{{asset($blog->blog_image)}}" alt="" class="w-100">
                            </div>
                            <div class="card-footer">
                                <h1>{{$blog->blog_title}}</h1>
                                <h3>{{$blog->blog_author}}</h3>
                            </div>
                        </div>
                    </a>

                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
