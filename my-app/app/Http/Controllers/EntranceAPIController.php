<?php

namespace App\Http\Controllers;

use App\Models\Playerinformation;
use Illuminate\Http\Request;

class EntranceAPIController extends Controller
{
    //3人来たらgame画面に
    public function checkPlayer(){
        $Player = Playerinformation::all()->count();
        if($Player == 3){$r['playerStatus']=true;}
        else{$r['playerStatus']=false;};
        return $r;
    }

    public function joinLog()
    {
        // ここでは Playerinformation を単純に最新順で表示する例
        $logs = \App\Models\Playerinformation::latest()->limit(30)->get()->reverse();

        return response()
        ->view('partials.join_log', compact('logs'))
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
    }

}
