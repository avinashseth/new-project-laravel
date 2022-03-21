<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function postCheckIfStudentCanVote(Request $request) {

        if($request->age >= 18) {
            echo 'You can vote';
        } else {
            echo 'You cannot vote';
        }

    }
}
