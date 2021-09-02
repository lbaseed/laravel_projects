<?php

namespace App\Http\Controllers;

use App\models\Cases;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = Cases::all();

        return view("viewCases", ['cases' => $cases]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $case = Cases::find($id)->first();

        return view("viewCase",['case' => $case]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $fields, $id)
    {
        $fields->validate([
            // 'case_id' => 'required',
            // 'case_name' => 'required',
            // 'case_subject' => 'required',
            // 'claimant' => 'required',
            // 'defendant' => 'required',
            // 'division' => 'required',
            // 'filing_date' => 'required',
            
            'assignment_date' => 'required',
            'adjournment_date' => 'required',
            'adjournment' => 'required',
        ]);

        $case = Cases::find($id);

        $case->update($fields->all());

       return $case ? redirect()->back()->withSuccess("Updated Successfully!"): redirect()->back()->withError("Failed to Update");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addCaseForm(){
        return view('addCase');
    }

    public function addCase(Request $fields){

        $fields->validate([
            'case_id' => 'required',
            'case_name' => 'required',
            'case_subject' => 'required',
            'claimant' => 'required',
            'defendant' => 'required',
            'division' => 'required',
            'filing_date' => 'required',
        ]);

       $insert= Cases::create([
            'case_id' => $fields["case_id"],
            'case_name' => $fields["case_name"],
            'case_subject' => $fields["case_subject"],
            'claimant' => $fields["claimant"],
            'defendant' => $fields["defendant"],
            'filing_date' => $fields["filing_date"],
            'division' => $fields["division"],
        ]);

       return $insert ? redirect()->back()->withSuccess("Case Added Successfully"): redirect()->back()->withError("Failed to Add");
    }
}
