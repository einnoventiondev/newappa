<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function season19(){
        return view('User.season-2019');
    }
    public function season20(){
        return view('User.season-2020');
    }
    public function season21(){
        return view('User.season-2021');
    }
}
