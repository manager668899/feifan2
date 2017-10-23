<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Study extends Controller
{
    public function s1()
    {
       $data=DB::table('study1')->get();
       return view('study.lista',['data'=>$data]);
    }
}
