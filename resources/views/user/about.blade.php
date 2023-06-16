@extends('master')
@section('title')
    User || About Page
@endsection
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="text-start">This project is being developed by</h3>
                    <h1 class="text-start secondary-color">Arman Afridi Rahman</h1>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('/')}}assets/img/home/bonsai_two.jpg" alt="" class="w-100 rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>
@endsection
