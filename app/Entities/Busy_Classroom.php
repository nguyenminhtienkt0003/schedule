<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Busy_Classroom extends Model
{
    protected $table='busy_classroom';
    public $timestamps = false;
    public function week()
    {
    	return $this->belongsTo('App\Entities\Week','id_week','id');
    }
    public function classroom()
    {
    	return $this->belongsTo('App\Entities\Classroom','id_classroom','id');
    }
    public function period()
    {
    	return $this->belongsTo('App\Entities\Period','id_period_start','id');
    }
}
