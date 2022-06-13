@extends('layouts.app')

@section('content')
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

</div>
@endsection
