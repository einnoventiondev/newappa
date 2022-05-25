<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function AboutPrince()
    {
        return view('User.About-Prince-Abdullah-Al-Faisal');
    }
    public function ArabicPoetry()
    {
        return view('User.Arabic-Poetry-Service');
    }
    public function awardwinners()
    {
        return view('User.award-winners');
    }
    public function advance()
    {
        return view('User.advance');
    }
    public function PoeticExperience()
    {
        return view('User.Poetic-Experience-Award');
    }
    public function Theatricalpoetry()
    {
        return view('User.Theatrical-poetry');
    }
    public function singingpoem()
    {
        return view('User.singing-poem');
    }
    public function videocontent()
    {
        return view('User.video-content');
    }
    public function diwan()
    {
        return view('User.diwan');
    }
	 public function contactus()
    {
        return view('User.contactus');
    }
  
}
