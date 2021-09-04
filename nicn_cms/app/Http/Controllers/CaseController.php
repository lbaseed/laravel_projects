<?php

namespace App\Http\Controllers;

use App\models\Cases;
use App\models\CaseStages;
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
        $cases = Cases::orderBy('case_id','asc')->get();

        return view("viewCases", ['cases' => $cases,'division'=>'ALL']);
    }

    public function divisionCases(Request $div){

        $div["division"] == "ALL" ? $cases = Cases::orderBy('case_id', 'asc')->get() : $cases = Cases::where('division', $div["division"])->orderBy('case_id','asc')->get();

        return view("viewCases", ['cases' => $cases, 'division' => $div["division"]]);
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
        $case = Cases::find($id);
        $caseStages = CaseStages::where('case_ref', $id)->orderBy('created_at','desc')->get();

        return view("viewCase", ['case' => $case, 'caseStages' => $caseStages]);
    }
    public function edit($id)
    {
        $case = Cases::find($id);

        return view("editCase", ['case' => $case]);
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
            'hearing_date' => 'required',
            'current_stage' => 'required',
        ]);

        $case = Cases::find($id);

        //keep status change record
        if($case->current_stage=='Fresh Filing'){
            $caseStage = CaseStages::create([
                'case_ref' => $case->id,
                'case_id' => $case->case_id,
                'prev_stage' => $case->current_stage,
                'prev_stage_date' => $case->filing_date,
                'new_stage' => $fields["current_stage"],
                'new_stage_date' => $fields["hearing_date"],
            ]);
        }else{
            $caseStage = CaseStages::create([
                'case_ref' => $case->id,
                'case_id' => $case->case_id,
                'prev_stage' => $case->current_stage,
                'prev_stage_date' => $case->hearing_date,
                'new_stage' => $fields["current_stage"],
                'new_stage_date' => $fields["hearing_date"],
            ]);
        }
        

        $case->update($fields->all());

        return $case ? redirect()->back()->withSuccess("Updated Successfully!") : redirect()->back()->withError("Failed to Update");

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

    public function addCaseForm()
    {
        return view('addCase');
    }

    public function addCase(Request $fields)
    {

        $fields->validate([
            'case_id' => 'required',
            'case_name' => 'required',
            'case_subject' => 'required',
            'claimant' => 'required',
            'defendant' => 'required',
            'division' => 'required',
            'filing_date' => 'required',
        ]);

        $insert = Cases::create([
            'case_id' => strtoupper($fields["case_id"]),
            'case_name' => $fields["case_name"],
            'case_subject' => $fields["case_subject"],
            'claimant' => $fields["claimant"],
            'defendant' => $fields["defendant"],
            'filing_date' => $fields["filing_date"],
            'current_stage' => "Fresh Filing",
            'division' => $fields["division"],
        ]);

        //insert CAse Stage
        $case_stage = CaseStages::create([
            'case_ref' => $insert->id,
            'case_id' => $insert->case_id,
            'prev_stage' => $insert->current_stage,
            'prev_stage_date' => $insert->filing_date,
            'new_stage' => $insert->current_stage,
            'new_stage_date' => $insert->filing_date,
        ]);

        return $insert ? redirect()->back()->withSuccess("Case Added Successfully") : redirect()->back()->withError("Failed to Add");
    }

    public function searchCases(Request $field){

        $cases = Cases::where('case_id', 'like', '%'.$field["param"].'%')
        ->orWhere('case_name', 'like', '%'.$field["param"].'%')
        ->orderBy('case_id', 'asc')
        ->get();

        return view('searchCases',['cases' => $cases]);
    }

    public static function casesQty($division){
        $numCases = Cases::where('division', $division)->count();

        return $numCases;
    }

    public static function cases($division){
        $numCases = Cases::where('division', $division)->count();

        return $numCases;
    }
}
