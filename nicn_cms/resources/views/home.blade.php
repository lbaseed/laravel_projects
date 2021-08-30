@extends('layouts.master')
@section('content')
@include('navigation.navbar')
@include('navigation.sidebar')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-10 row">
    
                <div class="col-md-12 col-sm-12">
                    <div class="card ml-3">
                        <div class="card-header">{{ __('Dashbaord') }}</div>
                       
                        {{ View('components.dashboard') }}
                        
                        
                    </div>
                </div>
    
            </div>
        </div>
    </div>   
</main>
@endsection
