<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function cour()
    {
        $cour = Course::orderBy('id')->get();

        return view('Course.index',['course' => $cour]);
    }
}
