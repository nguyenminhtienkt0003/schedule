<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Users_Subject extends Model
{
    protected $table='users_subject';
    public $timestamps = false;
    public function subject()
    {
    	return $this->belongsTo('App\Entities\Subject','id_subject','id');
    }
    public function users()
    {
    	return $this->belongsTo('App\User','id_users','id');
    }
}
