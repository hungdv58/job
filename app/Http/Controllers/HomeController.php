<?php

namespace App\Http\Controllers;

use DB;


class HomeController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $jobs = DB::select('select * from joblist');
        return view("dscongviec")->with('jobs',$jobs);

    }
    public function sinhvien()
    {
        $students = DB::select('select * from student');
        return view("dssinhvien")->with('students',$students);

    }
    public function login()
    {
        return view("sv_login");
    }
    public function congviec_id($id)
    {
        $jobs = DB::select('select * from joblist WHERE job_id='.$id);
        return view("congviec")->with('jobs',$jobs);
    }
    public function sinhvien_id($id)
    {
        $students = DB::select('select * from student WHERE student_id='.$id);
        return view("sinhvien")->with('students',$students);
    }
}