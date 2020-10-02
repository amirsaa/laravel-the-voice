@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="font-weight-bolder text-primary mb-0">The Voice</h1>
                        <h4 class="mt-0 font-weight-bold text-secondary">{{ __('Dashboard') }}</h4>
                    </div>

                    <div class="col-sm-6 text-right">
                        <span class="mr-3">Hi <b>{{ Auth::user()->name }}</b>!</span>
                        <a href="/logout">{{ __('Logout') }}</a>
                    </div>
                </div>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
@endsection
