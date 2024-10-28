<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewController extends Controller
{

    public function get_news($input) {
        $data = [
            'input' => $input,
        ];

        return Inertia::render('Frontend/News', ['response' => rtFormat($data) ?? []]);
    }

}
