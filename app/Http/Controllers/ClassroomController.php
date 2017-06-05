<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Classroom;
class ClassroomController extends Controller
{
    public function getList()
    {
    	$classroom = Classroom::all();
    	return view('admin.classroom.list',['classroom'=>$classroom]);
    }
    public function getInsert()
    {
    	return view('admin.classroom.insert');
    }
    public function postInsert(Request $request)
    {
    	$classroom = new Classroom();
    	$classroom->Name_Classroom = $request->name;
    	$classroom->Status = "Chưa đăng ký";
    	$classroom->save();
    	return redirect('admin/classroom/list');
    }
    public function delete($id)
    {
        $classroom = Classroom::find($id);
        $classroom->delete();
        return redirect('admin/classroom/list');
    }
}
