<?php

namespace App\Http\Controllers\Frontend;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseType;

class IndexController extends Controller
{
    public function __construct()
    {
    }

    // 前往前台首頁
    public function index()
    {
        $courseType = CourseType::select(['id','sort', 'name', 'content', 'img_path'])->get();
        return Inertia::render('Frontend/Index', ['response' => rtFormat($courseType) ?? []]);
    }
}
