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
        $member->dateCommittee_A=$request->studentDateA;
        $member->timeCommittee_A=$request->studentTimeA;
        $member->dateCommittee_B=$request->studentDateB;
        $member->timeCommittee_B=$request->studentTimeB;
        $status = $member->saveOrFail();

        if ($status) {
            return redirect()->route('homePage')->with(['success'=>'Registration Successfully']);
        } else {
            return redirect()->route('homePage')->with(['fail'=>'Regestration Fail']);
        }
    }
    public function getAllMembers()
    {
        $member=new Event();
        $collection=$member->get();
        return \view('Committees.EventMembers')->with('collection',$collection);
    }
}

