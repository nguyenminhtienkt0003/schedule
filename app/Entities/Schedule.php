<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';
    public $timestamps = false;
    public function subject()
    {
    	return $this->belongsTo('App\Entities\Subject','id_subject','id');
    }
    public function period()
    {
    	return $this->belongsTo('App\Entities\Period','id_period','id');
    }
    public function classroom()
    {
    	return $this->belongsTo('App\Entities\Classroom','id_classroom','id');
    }
    public function week()
    {
    	return $this->belongsTo('App\Entities\Week','id_week','id');
    }
    
}
