@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 row">
            <div class="col-md-3 d-lg-block d-none">

                <div class="card">
                    <div class="card-header">{{ __('Menu') }}</div>
    
                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                </div>
                
            </div>

            <div class="col-md-8">
                <div class="card ml-3">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    {{ __('You are logged in!') }}
                        {{ "Welcome to NICN Case Portal" }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
