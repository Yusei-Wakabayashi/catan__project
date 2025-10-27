<?php

namespace App\Http\Controllers;

use App\Models\Playerinformation;

use Illuminate\Http\Request;

class TestapiController extends Controller
{
    //
     public function name(){
        $name = Playerinformation::all();
        return $name;
     }
}
