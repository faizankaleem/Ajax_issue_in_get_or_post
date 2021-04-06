<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student extends Controller
{
    //

function show_data()
{
    
 
    return view('Ajax_call');
}


function send_data(Request $req)
{

    $arr = ['Hadiya','Faizan'];
    return $arr;

}


}

