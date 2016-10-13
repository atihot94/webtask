<?php
	namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $table='departments';
	public function teachers(){
		return $this->hasMany(Teacher::class,'department_id','id');
	}
}
	
