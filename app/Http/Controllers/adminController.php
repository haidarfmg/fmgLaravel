<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function fmg($id,$name)
    {
         $fmgarray = array('id' => $id,'name' => $name,'age' => 25 );
        return view('fmg',$fmgarray);
    }
    public function fmg1()
    {
         $fmgarray = array('id' => 1,'name' =>"fmg",'age' => 25 );
        return view('fmg',$fmgarray);
    }
    public function fmg0()
    {
        return view('welcome');
    }
}
