@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="">
                    <h1>Welcome to {{  Auth::user()->name }}'s dashboard</h1>
                    <h1>Your user ID is: {{  Auth::user()->id }}</h1>
                </div>

                <div class="card-body">
                    <h2>What to do next ?</h2>
                    <ul>
                        <li>
                            <a href="/">create new post</a>
                        </li>
                        <li>
                            <a href="/">create new post</a>
                        </li>
                        <li>
                            <a href="/">create new post</a>
                        </li>
                        <li>
                            <a href="/">create new post</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
