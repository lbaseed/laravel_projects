@extends('layouts.master')
@section('content')
<main class="py-4">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-12 row">
    
                

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                            <div class="card-header">{{ __('Case Profile') }}
                                <a href="{{ url('/cases') }}" class="btn btn-outline-secondary ml-5 float-right">
                                    {{ __('Back') }}
                                </a>
                            </div>
                            <div class="card-body p-0">
                            
                                @if ($case)
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        
                                        <tbody>    
                                       
                                            <tr>
                                                <td><b>Division</b></td> <td>{{ $case->division }}</td>
                                            </tr><tr>
                                                <td><b>Case ID</b></td> <td><a href="/case/{{ $case->id }}/edit"><b>{{ $case->case_id }}</b></a></td>
                                            </tr><tr> 
                                                <td><b>Parties Involved</b></td> <td>{{ $case->case_name }}</td>
                                            </tr><tr>
                                                <td><b>Case Subject Matter</b></td> <td>{{ $case->case_subject }}</td>
                                            </tr><tr>
                                                <td><b>Claimant</b></td> <td>{{ $case->claimant }}</td>
                                            </tr><tr>
                                                <td><b>Defendant</b></td> <td>{{ $case->defendant }}</td>
                                            </tr><tr>
                                                <td><b>Filing Date</b></td> <td>{{ $case->filing_date }}</td>
                                            </tr><tr>
                                                <td><b>Assignment Date</b></td> <td>{{ $case->assignment_date }}</td>
                                            </tr><tr>
                                                <td><b>Current Stage</b></td> <td>{{ $case->current_stage }}</td>
                                            </tr><tr>
                                                <td><b>Adjournment Date</b></td> <td>{{ $case->hearing_date }}</td>
                                            </tr><tr>
                                                <td><b>Comments</b></td> <td>{{ $case->comments }}</td>
                                            </tr>
                                        
                                        </tbody>
                                        
                                    </table>
                                </div>
                                
                                @else
                                <div class="alert alert-success">
                                    {{ __('No Record Found') }}
                                </div>
                                @endif

                            </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">    

                    <div class="card ml-3 mt-3">
                            <div class="card-header">{{ __('Case life Cycle Activities') }}</div>
                            <div class="card-body">

                                
                            </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>   
</main>
@endsection





