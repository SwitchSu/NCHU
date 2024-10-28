<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WebInformationController extends Controller
{
    //
    public function get_web($input){
        $data = (object)[
            'input' =>$input,
        ];
        // dd($data);
        return Inertia::render('Frontend/WebInformation', ['response' => rtFormat($data) ?? []]);
    }
}
