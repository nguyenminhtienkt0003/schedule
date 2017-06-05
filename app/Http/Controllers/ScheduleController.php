<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Period;
use App\Entities\Subject;
use App\Entities\Classroom;
use App\Entities\Schedule;
use App\Entities\Week;
use App\Entities\Semester;
use App\Entities\Users_Subject;
use App\Entities\Busy_Teacher;
use DB;
use Excel;
use PDF;
use CSV;
class ScheduleController extends Controller
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
    }
    function select_teacher($id_subject)
    {

        $userSubjects = Busy_Teacher::where('id_subject',$id_subject)->get();
        foreach ($userSubjects as $key => $userSubject) {
            
        }
        //dd($userSubjects);
        for($i=0; $i<count($user_subject);$i++)
        {
            //$id_subject = $user_subject->id_subject;
            if($user_subject->id_subject[$i]==$id_subject)
            {
                $id_teacher = $user_subject->id_teacher;
            }
        }
        
    }
    function check_busy_teacher()
    {

    }
    function select_classroom()
    {

    }
    function check_busy_classroom()
    {

    }

    public function getList()
    {
        
        $subjects = Subject::all();
        foreach ($subjects as $key => $subject) {
             $this->select_teacher($subject->id);
        }
        return view('admin.schedule.list');
    }
    function adaptability_individual(Cathe) //Độ thích nghi của cá thể
    {
        $count = 0;
        foreach () // Foreach gen thuộc cá thể
        {
            if() // If gen vi phạm ràng buộc độ thích nghi của các thể
                $count = $count +1;
        }
        return (1/($count*trongso));
    }
    function adaptability_bond_class(Cathe) //Tính độ thích nghi dựa vào ràng buộc nhóm lớp
    {
        $count = 0; //Biến đếm số lần vi phạm
        foreach () //Foreach nhóm
        {
            foreach() //Foreach ngày, tiết học
            {
                $c = 0; //Khởi tạo biến đếm số lần đặt lịch của nhóm =0
                foreach()
                {
                    $lop = Cathe['phong','ngay','tiet'];
                    if()            //if lớp thuộc nhóm
                        $c = $c+1; 
                }
                if($c>1) $count = $count + ($c-1);
            }
        }
        return (1/($count*trongso));
    }
    function adaptability_bond_coincide_teacher(Cathe) //Tính độ thích nghi dựa vào ràng buộc trùng giờ giảng viên
    {
        $count = 0; //Biến đếm số lần vi phạm
        foreach() // Foreach giảng viên
        {
            foreach() // Foreach ngày, tiết học
            {
                $c =0; //Khởi tạo biến đếm số lần đặt lịch của giảng viên =0
                foreach() //Foreach phòng
                {
                    $lop = Cathe['phong','ngay','tiet'];
                    if() $c = $c+1; //If Giảng_Dạy(lớp) = giảng viên
                }
                if($c>1) $count = $count +($c-1);
            }
        }
        return (1/($count*trongso));
    } 
    function adaptability_bond_time_busy_teacher(Cathe)  //Tính độ thích nghi dựa vào ràng buộc thời gian bận của giảng viên
    {
        $count =0;
        foreach() //foreach phòng
        {
            foreach() //foreach ngày, tiết học
            {
                $lop = Cathe['phong','ngay','tiet'];
                gv = Giảng_Dạy('lớp');
                if(teacher_busy_time('gv','ngày','tiết')) $count = $count +1; //if giảng viên bận giờ (gv,ngày, tiết)
            }
        }
        return (1/($count*trongso));
    }
    function adaptability_bond_capacity_class(Cathe) //Tính độ thích nghi dựa vào ràng buộc sức chứa của phòng
    {
        $count =0; //Biến đếm số lần vi phạm ràng buộc
        foreach() //foreach phòng
        {
            foreach() //foreach ngày, tiết học
            {
                lop = Cathe['phong','ngay','tiet'];
                if() //if số sinh viên của lớp > số chỗ ngồi của phòng
                    $count = $count +1;
            }
        }
        return (1/($count*trongso));
    }
    function adaptability_bond_time_busy_class(Cathe)  //Tính độ thích nghi dựa vào ràng buộc thời gian bận của phòng học
    {
        $count =0;
        foreach() //foreach phòng
        {
            foreach() //foreach ngày, tiết học
            {
                $lop = Cathe['phong','ngay','tiet'];
                //gv = Giảng_Dạy('lớp');
                if(class_busy_time('phòng','ngày','tiết')) $count = $count +1; //if phòng bận ngày, giờ (phòng,ngày, tiết)
            }
        }
        return (1/($count*trongso));
    }
    function adaptability_bond_period_week(Cathe) //Tính độ thích nghi dựa vào ràng buộc số tiết trong tuần
    {
        $count = 0; //Biến đếm số lần vi phạm ràng buộc
        foreach() //foreach lớp
        {
            $c = 0; //Biến đếm số tiết
            foreach() //foreach phòng
            {
                foreach() //foreach ngày, tiết học
                {
                    if($lop = Cathe['phong','ngay','tiet']) //if lớp = Cathe[phòng, ngày, tiết]
                        $c = $c+1;
                }
            }
            $count = $count + abs('số tiết quy định' - $c);
        }
        return (1/($count*trongso));
    }

    public function getListHand()
    {
        $week=Week::all();
    	$week2 = Week::find(1);
        $week3 = Week::find(2);
        $week4 = Week::find(3);
        $week5 = Week::find(4);
        $week6 = Week::find(5);
        $week7 = Week::find(6);
        $period = Period::all();
        $period1 = Period::find(1);
        $period2 = Period::find(2);
        $period3 = Period::find(3);
        $period4 = Period::find(4);
        $period5 = Period::find(5);
        $period6 = Period::find(6);
        $period7 = Period::find(7);
        $period8 = Period::find(8);
        $period9 = Period::find(9);
        $period10 = Period::find(10);
        $period11 = Period::find(11);
        $period12 = Period::find(12);
    	$classroom = Classroom::all();
    	$subject = Subject::all();
        $schedule = Schedule::all();
    	return view('admin.schedule.list_hand',
            [
            "period"=>$period,
            "period1"=>$period1, 
            "period2"=>$period2, 
            "period3"=>$period3, 
            "period4"=>$period4, 
            "period5"=>$period5, 
            "period6"=>$period6, 
            "period7"=>$period7, 
            "period8"=>$period8, 
            "period9"=>$period9,  
            "period10"=>$period10, 
            "period11"=>$period11, 
            "period12"=>$period12, 
            "classroom"=>$classroom, 
            "subject"=>$subject, 
            "schedule"=>$schedule,
            "week"=>$week,
            "week2"=>$week2,
            "week3"=>$week3,
            "week4"=>$week4,
            "week5"=>$week5,
            "week6"=>$week6,
            "week7"=>$week7,

            ]);
    }
    public function getInsert()
    {
        return view('admin.schedule.insert');
    }
    public function postInsert(Request $request)
    {

        $subjectId = $request->get('subject');

        $subject = Subject::find($subjectId);
        $classroomID = $request->get('classroom');
        $classroom = Classroom::find($classroomID);
        $classroom->Status ="Đã Đăng Ký";
        $a = $subject->Credit+$request->start_period-1;
        $c = $request->start_period;

        for($i=$c; $i<=$a; $i++)
        {
            if(($i>0 && $i<6) || ($i>6 && $i<13))
            {
                DB::table('schedule')->insert([
                ['id_semester' => $request->semester, 'id_subject' => $request->subject, 'id_classroom' => $request->classroom, 'id_week' => $request->week, 'id_period'=>$i],               
            ]);
            }
            
        }
        return redirect('admin/schedule/list-hand');
    }
    public function downloadExcel($type)
    {
        $data=Schedule::get()->toArray();
        return Excel::create('schedule', function($excel) use($data){
            $excel->sheet('mySheet', function($sheet) use($data){
                $sheet->fromArray($data);
            });
        })->download($type);
    }
    public function downloadPDF()
    {
        $schedule = Schedule::all();
        $data =[
            'schedule'=>$schedule,
         ];
        $pdf = PDF::loadView('admin.schedule.list_hand',$data);
         return $pdf->stream('schedule.pdf');
       
    }
}
