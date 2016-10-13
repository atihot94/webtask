<?php

	namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table='teachers';

	public function department(){
		return $this->belongsTo(Department::class,'department_id','id');
	}
}
