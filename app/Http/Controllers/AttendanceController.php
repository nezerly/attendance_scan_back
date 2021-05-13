<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Attendance[]|Collection
     */
    public function index()
    {
        return Attendance::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        return $request;
        $attendance = new Attendance();
        $attendance->barcode_text = $request['barcode_text'];
        $attendance->student_name = $request['student_name'];
        $attendance->student_index = $request['student_index'];
        $attendance->student_class = $request['student_class'];
        if ($attendance->save()) return \response('Clock in Success');
        else return \response('Error! Please retry', 503);
    }

    /**
     * Display the specified resource.
     *
     * @param Attendance $attendance
     * @return  Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Display resources based on request.
     *
     * @param Attendance $attendance
     * @return Response
     */
    public function showByIndex(Request $request)
    {
        $student_index = $request['student_index'];
        return  Attendance::where('student_index', $student_index)->get();
    }
    /**
     * Display resources based on request.
     *
     * @param Attendance $attendance
     * @return Response
     */
    public function showByClass(Request $request)
    {
        $student_class = $request['student_class'];
        return  Attendance::where('student_class', $student_class)->get();
    }

    /**
     * Display resources based on request.
     *
     * @param Attendance $attendance
     * @return Response
     * @throws \Exception
     */
    public function showByDate(Request $request)
    {
//        $date = $request['date'];
        $date = new \DateTime('2021/05/12');
        return  Attendance::whereDate('created_at', $date)->get();
    }
    /**
     * Display resources based on request.
     *
     * @param Attendance $attendance
     * @return Response
     * @throws \Exception
     */
    public function showByToday(Request $request)
    {
//        $date = $request['date'];
        $date = new \DateTime(today());
        return  Attendance::whereDate('created_at', $date)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Attendance $attendance
     * @return Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Attendance $attendance
     * @return Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Attendance $attendance
     * @return Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
