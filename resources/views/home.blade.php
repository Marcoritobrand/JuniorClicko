@extends('layouts.app')

@section('content')
<head>
    <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p>You can  <a href="{{ route('user.create') }}" class="underline">Create</a>,  <a href="{{ route('user.read') }}" class="underline">Read</a>,  <a href="{{ route('user.read') }}" class="underline">Update</a>,  <a href="{{ route('user.read') }}" class="underline">Delete</a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="txtqueescrud">¿QUE QUIERES HACER?</h1>

            </div>
        </div>
        <div class="row ">

            <div class="col-md-6 col-lg-3 pb-5 "><a href="{{ route('user.create') }}">
                <div class="h-100 py-5 services-icon-wap shadow divcruddef">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center fontfamilygoogle">CREATE</h2>
                </div></a>
            </div>

            <div class="col-md-6 col-lg-3 pb-5"><a href="{{ route('user.read') }}">
                <div class="h-100 py-5 services-icon-wap shadow divcruddef">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center fontfamilygoogle">READ</h2>
                </div></a>
            </div>

            <div class="col-md-6 col-lg-3 pb-5"><a href="{{ route('user.read') }}">
                <div class="h-100 py-5 services-icon-wap shadow divcruddef">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center fontfamilygoogle">UPDATE</h2>
                </div></a>
            </div>

            <div class="col-md-6 col-lg-3 pb-5"><a href="{{ route('user.read') }}">
                <div class="h-100 py-5 services-icon-wap shadow divcruddef">
                    <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center fontfamilygoogle">DELETE</h2>
                </div></a>
            </div>
        </div>
    </section>

</div>
@endsection
