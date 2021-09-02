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
                        <div class="card-header">{{ __('View All Cases') }}</div>
                            <div class="card-body">
                            
                                @if (count($cases)>0)
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Division</th>
                                            </tr>
                                        </thead>
                                        <tbody>    
                                          
                                        @foreach ($cases as $case)
                                        
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td><a href="/case/{{ $case->id }}/edit"><b>{{ $case->case_id }}</b></a></td> 
                                                <td>{{ $case->case_name }}</td>
                                                <td>{{ $case->case_subject }}</td>
                                                <td>{{ $case->division }}</td>
                                            </tr>
                                        

                                          
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SN</th>
                                                <th>Case ID</th>
                                                <th>Parties</th>
                                                <th>Case Subject</th>
                                                <th>Division</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    
                                @endif
                               
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>   
</main>
@endsection





