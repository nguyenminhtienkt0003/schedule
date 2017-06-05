<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Period;
use App\Entities\Users_Subject;
class HomeController extends Controller
{
	public function getHome(){
		return view('admin.layout.home');
	}
    public function getCalculator()
    {
    	return view('admin.calculator');
    }
    public function getGamecaro()
    {
    	return view('admin.gamecaro');
    }
    public function getTexteditor()
    {
    	return view('admin.texteditor');
    }
    public function getMaps()
    {
    	return view('admin.maps');
    }
    public function getPeriod()
    {

        $period = Period::all();
        //$period = Period::orderByRaw("RAND()")->get();
        return view('admin.period',["period"=>$period]);
    }
    public function getUsersSubject()
    {
        $users_subject = Users_Subject::all();
        return view('admin.users_subject',["users_subject"=>$users_subject]);
    }
}
