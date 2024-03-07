<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VallalatController extends Controller
{
    public function VallalatDashboard(){
        return view('vallalat.vallalat_dashboard');
    }
}
