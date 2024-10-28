<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Course;

class CourseController extends Controller
{

    public function get_course($input){
        $courses = [];
        if($input === 'all'){
            $courses = Course::select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        }else if($input === 'latest'){
            $courses = Course::select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->orderBy('start_time', 'desc')->take(3)->get();
        }else {
            $courses = Course::where('course_type_id', $input)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        }
        $data = (object)[
            'courses' => $courses,
            'input' =>$input,
        ];
        $courses = Course::where('course_type_id', $input)->select(['course_type_id', 'name', 'start_time', 'price', 'link', 'img_path'])->get();
        // dd($data);
        return Inertia::render('Frontend/Course', ['response' => rtFormat($data) ?? []]);
    }

}
