@extends('master')
@section('title')
    Admin || Dashboard Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h1 class="text-center secondary-color">Hello, {{Auth::user()->name}}</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

