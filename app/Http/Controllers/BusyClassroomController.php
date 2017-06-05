<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Busy_Teacher;
use App\Entities\Period;
use App\Entities\Subject;
use App\Entities\Classroom;
use App\Entities\Schedule;
use App\Entities\Week;
use App\Entities\Semester;
use App\Entities\Busy_Classroom;
use Auth;
class BusyClassroomController extends Controller
{
    function __construct()
    {
        $period= Period::all();
        $subject = Subject::all();
        $classroom = Classroom::all();
        $schedule = Schedule::all();
        $week = Week::all();
        $semester = Semester::all();

        view()->share('period', $period);
        view()->share('subject', $subject);
        view()->share('classroom', $classroom);
        view()->share('schedule', $schedule);
        view()->share('week', $week);
        view()->share('semester', $semester);
        if(Auth::check())
        {
            view()->share('users',Auth::user());
        }
    }
    public function getList()
    {
    	$busy_classroom = Busy_Classroom::all();
    	return view('admin.busy_classroom.list',["busy_classroom"=>$busy_classroom]);
    }
    public function getInsert()
    {
    	$busy_classroom = Busy_Classroom::all();
    	return view('admin.busy_classroom.insert');
    }
}
