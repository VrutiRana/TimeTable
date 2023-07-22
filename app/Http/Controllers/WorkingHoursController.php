<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeekHoursRequest;
use App\Models\WorkingHours;
use Illuminate\Http\Request;

class WorkingHoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addWeekdays');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeekHoursRequest $request)
    {
        $data = new WorkingHours;
        $data->working_days = $request->working_days;
        $data->subjects_per_days=$request->subjects_per_days;
        $data->total_subjects=$request->total_subjects;
        $data->total_hours_of_week=$request->total_hours_week;
        $data->save();

        $weekdays = WorkingHours::where('id',$data->id)->first();
        return view('addSubject',['weekdays'=>$weekdays]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkingHours  $workingHours
     * @return \Illuminate\Http\Response
     */
    public function show(WorkingHours $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkingHours  $workingHours
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkingHours $workingHours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkingHours  $workingHours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkingHours $workingHours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkingHours  $workingHours
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingHours $workingHours)
    {
        //
    }

    public function getWorkingHours(Request $request){
        $totalHours = $request->working_days * $request->subjects_per_days;dd($totalHours);
        return $totalHours;
    }

    public function showData($id){
        $weekdays = WorkingHours::where('id',$id)->first();
        return view('addSubject',['weekdays'=>$weekdays]);
    }

}
