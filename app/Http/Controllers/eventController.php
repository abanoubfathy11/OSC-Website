<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentData;
use App\Models\Event;
use Illuminate\Http\Request;

class eventController extends Controller
{

    public function store(StoreStudentData $request)
    {

        $member=new Event();

        $member->name=$request->studentName;
        $member->email=$request->studentEmail;
        $member->phone=$request->studentPhone;
        $member->college=$request->studentCollege;
        $member->studentYear=$request->studentYear;
        $member->committee_A=$request->studentCommitteeA;
        $member->committee_B=$request->studentCommitteeB;
        $member->date=$request->studentDate;
        $member->time=$request->studentTime;
        $status = $member->saveOrFail();

        if($status)
            return redirect()->route('home')->with(['success'=>'Registration Successfully']);
        else
            return redirect()->route('home')->with(['fail'=>'Regestration Fail']);

    }
}
