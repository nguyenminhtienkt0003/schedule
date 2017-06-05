<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Subject;
class SubjectController extends Controller
{
    public function getList()
    {
    	$subject = Subject::all();
    	return view('admin.subject.list',['subject'=>$subject]);
    }
    public function getInsert()
    {
    	return view('admin.subject.insert');
    }
    public function postInsert(Request $request)
    {
    	$subject = new Subject();
    	$subject->Name_Classroom = $request->name;
    	$subject->Status = "Chưa đăng ký";
    	$subject->save();
    	return redirect('admin/subject/list');
    }
    public function delete($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect('admin/subject/list');
    }
}
