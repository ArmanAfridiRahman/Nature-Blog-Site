@extends('master')
@section('title')
    Admin || Login Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center secondary-color">Login Page</h1>
                        <hr/>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">E-mail</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-primary">
                                    <a href="{{route('register')}}" class="text-decoration-none ms-3">Don't Have An Account yet?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

