<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    //
    public function get_about($input){
        $data = (object)[
            'input' =>$input,
        ];
        // dd($data);
        return Inertia::render('Frontend/About', ['response' => rtFormat($data) ?? []]);
    }
}
