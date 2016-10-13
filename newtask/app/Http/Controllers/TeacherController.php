<?php
	namespace App\Http\Controllers;

	use App\Models\Teacher;
	use App\Models\Department;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\View;

	class TeacherController extends Controller{

		public function search () {

			$departments = Department::pluck( 'department_name', 'id' );

//dd($departments);
			return View::make( 'index' )->with( [ 'departmentList' => $departments ] );
		}

		public function postSearch ( Request $request ) {

			//dd($request['teacher-name']);
			$department = Department::with( 'teachers' );
			$teacher=Teacher::all();
			

			if ($request['teacher']){
				$teacher=$teacher->where('teachers',function($query)use($request){
					$teacher	=$request['teacher'];
					$query->where( 'teacher_name', 'like', "%$teacher%" );
				});
			}

			Teacher::pluck('teacher_name','id');

			if ( $request[ 'department' ] ) {
				$department = $department->where( 'id', $request[ 'department' ] );
			}
			$department     = $department->get();
			$departmentList = Department::pluck( 'department_name', 'id' );

			return view( 'index' )->with( [ 'departments' => $department, 'departmentList' => $departmentList, 'inputs' => $request ] );
		}
	}

