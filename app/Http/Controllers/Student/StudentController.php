<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    function postCheckIfStudentCanVote(Request $request) {

        if($request->age >= 18) {
            echo 'You can vote';
        } else {
            echo 'You cannot vote';
        }

    }

    function getListOfAllStudents() {

        // $students = \DB::table('students')
        //     ->select('id', 'email', 'name')
        //     ->limit(10)
        //     ->get();


        $students = Student::select('id', 'email', 'name')
            ->orderBy('id', 'desc')
            ->paginate(25);

        return view('student.view-all', compact('students'));

    }
}
