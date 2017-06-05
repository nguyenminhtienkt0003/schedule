<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Busy_Teacher extends Model
{
    protected $table='busy_teacher';
    public $timestamps = false;
    public function week()
    {
    	return $this->belongsTo('App\Entities\Week','id_week','id');
    }
    public function users()
    {
    	return $this->belongsTo('App\User','id_teacher','id');
    }
    public function period()
    {
    	return $this->belongsTo('App\Entities\Period','id_period_start','id');
    }
}
