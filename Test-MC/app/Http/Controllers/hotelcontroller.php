<?php

namespace App\Http\Controllers;
use App\models\locations;

use Illuminate\Http\Request;

class hotelcontroller extends Controller
{
    public function save(Request $request){

        dd($request->all());

    }
}
