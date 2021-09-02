@extends('layouts.master')
@section('content')
@include('navigation.navbar')
@include('navigation.sidebar')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-10 row">
    
                 
                        {{ View('components.dashboard') }}
                        
    
            </div>
        </div>
    </div>   
</main>
@endsection
