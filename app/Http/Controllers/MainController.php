<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{

    public function index()
    {
        //relocated to the AppServiceProvider method boot, to be able to share easily to all views
/*         $dateTime = DateUtils::formatDate( date("Y-m-d H:i:s") );
        return view('layout_main',compact('dateTime')); */


        return view('home');
    }

}
