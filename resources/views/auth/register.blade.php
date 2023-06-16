@extends('master')
@section('title')
    Admin || Login Page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-center secondary-color">Registration Page</h1>
                        <hr/>
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
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
                                <label class="col-md-3">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-primary">
                                    <a href="{{route('login')}}" class="text-decoration-none ms-3"> Already Have An Account?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

