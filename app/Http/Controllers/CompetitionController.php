<?php

namespace App\Http\Controllers;

use App\Models\Nation;
use App\Models\Country;
use App\Models\Competition;
use App\Models\Competition1;
use App\Models\competition2;
use App\Models\Competition4;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $country = Country::all();
        $nation = Nation::all();
        return view('User.participation-form', compact('country', 'nation'));
    }
    public function indexb()
    {
        $nation = Nation::all();
        $country = Country::all();
        return view('User.participation-formb', compact('country', 'nation'));
    }
    public function form2()
    {
        return view('User.participation2-form');
    }
    public function form3()
    {
        return view('User.participation3-form');
    }
    public function form4()
    {
        return view('User.participation4-form');
    }

    public function sendemail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'description' =>  $request->description,
        ];
        $sender = ':  اتصل بنا ';
        $reply = $details['email'];
        Mail::send('emails.contactmail', ['details' => $details], function ($message) use ($reply, $sender) {
            $message->to('arsalamir.aa856@gmail.com')->subject($sender)
                ->from($reply);
        });
        return redirect('/');
    }

    public function index2(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            'type' => 'required',
        ]);
		
        if ($request->type == 2) {
			
            $request->validate([
                
                'release' => 'required',
                'place' => 'required',
                'title' => 'required',
                'relation' => 'required',
                'about' => 'required',
                'idNumber' => 'required',
                'state' => 'required',
                'inputName' => 'required',
                'inputEmail' => 'required',
                'phoneNumber' => 'required',
                'state' => 'required',
                'orgniztionName' => 'required',
            ]);
        }
		
		
		

        if (isset($request->letter) && !empty($request->letter)) {
			
         //   $letter  = Storage::disk('public')->put('upload/', $request->letter);
			$letter  = $request->letter->getClientOriginalName();
			$path = $request->file('letter')->storeAs(
    'public/upload', $letter
);
        // $letter = null ;
		} else {
            $letter  = null;
        }
        if (isset($request->candidateImage) && !empty($request->candidateImage)) {
        $candidateImage  = $request->candidateImage->getClientOriginalName();
			$path = $request->file('candidateImage')->storeAs(
    'public/upload', $candidateImage
);
			// dd($path);
		// $candidateImage  = null;
        } else {
            $candidateImage  = null;
        }
        if (isset($request->passportimages) && !empty($request->passportimages)) {
            // $passportimages  = Storage::disk('public')->put('upload/', $request->passportimages);
			$passportimages  = $request->passportimages->getClientOriginalName();
			$path = $request->file('passportimages')->storeAs(
    'public/upload', $candidateImage
);
           //  $passportimages = null;
		} else {
            $passportimages  = null;
        }
        if (isset($request->publishedWorks) && !empty($request->publishedWorks)) {
        //     $publishedWorks  = Storage::disk('public')->put('upload/', $request->publishedWorks);
			$publishedWorks  = $request->publishedWorks->getClientOriginalName();
			$path = $request->file('publishedWorks')->storeAs(
    'public/upload', $publishedWorks
);
      //   $publishedWorks = null;
		} else {
            $publishedWorks  = null;
        }
		$prev = url()->previous();
		$link_array = explode('/',$prev);
		$segment = end($link_array);
		if($segment == 'six' || $segment == 'seven')
		{
			$fieldname = $request->fieldname;
			$age = $request->age;
			$uni_number = $request->uniNumber;
			$uni_email = $request->uniEmail;
			$phone_number2 = $request->phoneNumber2;
			
		
		}
		else{
		$fieldname =  'null';
			$age = 'null';
			$uni_number = 'null';
			$uni_email = 'null';
			$phone_number2 ='null';
		}
        Competition::create([
            'type' => $request->type,
            'form' => $request->form,
            'letter' => $letter,
            'publishedWorks' => $publishedWorks,
            'candidateImage' => $candidateImage,
            'passportimages' => $passportimages,
            'release' => $request->release,
            'place' => $request->place,
            'title' => $request->title,
            'relation' => $request->relation,
            'about' => $request->about,
            'idNumber' => $request->idNumber,
            'inputNationality' => $request->inputNationality,
            'inputName' => $request->inputName,
            'inputEmail' => $request->inputEmail,
            'phoneNumber' => $request->phoneNumber,
            'state' => $request->state,
            'orgniztionName' => $request->orgniztionName,
			'phone_number2'  => $phone_number2,
			'age'   => $age,
			'uni_number' => $uni_number,
			'uni_email' => $uni_email,
			'fieldname'  => $fieldname,
        ]);
        return redirect('/');
    }

    public function dropdownCompetition()
    {
        return view('User.university-students');
    }

    public function dropdownCompetition2()
    {
        return view('User.Prince-Abdullah-Al-Faisal-Competition');
    }


    public function index3(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            'type' => 'required',
        ]);
        if ($request->type == 2) {
            $request->validate([
                'letter' => 'required',
                'publishedWorks' => 'required',
                'candidateImage' => 'required',
                'passportimages' => 'required',
                'release' => 'required',
                'place' => 'required',
                'title' => 'required',
                'relation' => 'required',
                'about' => 'required',
                'idNumber' => 'required',
                'inputNationality' => 'required',
                'inputName' => 'required',
                'inputEmail' => 'required',
                'phoneNumber' => 'required',
                'state' => 'required',
                'orgniztionName' => 'required',
            ]);
        }
        if ($request->type ==    1) {
            $request->validate([
                'publishedWorks' => 'required',
                'candidateImage' => 'required',
                'passportimages' => 'required',
                'release' => 'required',
                'place' => 'required',
                'title' => 'required',
                'about' => 'required',
                'idNumber' => 'required',
                'inputNationality' => 'required',
                'inputName' => 'required',
            ]);
        }
        if (isset($request->letter) && !empty($request->letter)) {
            $letter  = Storage::disk('public')->put('upload/', $request->letter);
        } else {
            $letter  = null;
        }
        if (isset($request->candidateImage) && !empty($request->candidateImage)) {
            $candidateImage  = Storage::disk('public')->put('upload/', $request->candidateImage);
        } else {
            $candidateImage  = null;
        }
        if (isset($request->passportimages) && !empty($request->passportimages)) {
            $passportimages  = Storage::disk('public')->put('upload/', $request->passportimages);
        } else {
            $passportimages  = null;
        }
        if (isset($request->publishedWorks) && !empty($request->publishedWorks)) {
            $publishedWorks  = Storage::disk('public')->put('upload/', $request->publishedWorks);
        } else {
            $publishedWorks  = null;
        }
        Competition1::create([
            'type' => $request->type,
            'letter' => $letter,
            'publishedWorks' => $publishedWorks,
            'candidateImage' => $candidateImage,
            'passportimages' => $passportimages,
            'release' => $request->release,
            'place' => $request->place,
            'title' => $request->title,
            'relation' => $request->relation,
            'about' => $request->about,
            'idNumber' => $request->idNumber,
            'inputNationality' => $request->inputNationality,
            'inputName' => $request->inputName,
            'inputEmail' => $request->inputEmail,
            'phoneNumber' => $request->phoneNumber,
            'state' => $request->state,
            'orgniztionName' => $request->orgniztionName,
        ]);
        return redirect('/');
    }

    public function index4(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            'type' => 'required',
        ]);
        if ($request->type == 2) {
            $request->validate([
                'letter' => 'required',
                'publishedWorks' => 'required',
                'candidateImage' => 'required',
                'passportimages' => 'required',
                'release' => 'required',
                'place' => 'required',
                'title' => 'required',
                'relation' => 'required',
                'about' => 'required',
                'idNumber' => 'required',
                'inputNationality' => 'required',
                'inputName' => 'required',
                'inputEmail' => 'required',
                'phoneNumber' => 'required',
                'state' => 'required',
                'orgniztionName' => 'required',
            ]);
        }
        if ($request->type ==    1) {
            $request->validate([
                'publishedWorks' => 'required',
                'candidateImage' => 'required',
                'passportimages' => 'required',
                'release' => 'required',
                'place' => 'required',
                'title' => 'required',
                'about' => 'required',
                'idNumber' => 'required',
                'inputNationality' => 'required',
                'inputName' => 'required',
            ]);
        }
        if (isset($request->letter) && !empty($request->letter)) {
            $letter  = Storage::disk('public')->put('upload/', $request->letter);
        } else {
            $letter  = null;
        }
        if (isset($request->candidateImage) && !empty($request->candidateImage)) {
            $candidateImage  = Storage::disk('public')->put('upload/', $request->candidateImage);
        } else {
            $candidateImage  = null;
        }
        if (isset($request->passportimages) && !empty($request->passportimages)) {
            $passportimages  = Storage::disk('public')->put('upload/', $request->passportimages);
        } else {
            $passportimages  = null;
        }
        if (isset($request->publishedWorks) && !empty($request->publishedWorks)) {
            $publishedWorks  = Storage::disk('public')->put('upload/', $request->publishedWorks);
        } else {
            $publishedWorks  = null;
        }
        competition2::create([
            'type' => $request->type,
            'letter' => $letter,
            'publishedWorks' => $publishedWorks,
            'candidateImage' => $candidateImage,
            'passportimages' => $passportimages,
            'release' => $request->release,
            'place' => $request->place,
            'title' => $request->title,
            'relation' => $request->relation,
            'about' => $request->about,
            'idNumber' => $request->idNumber,
            'inputNationality' => $request->inputNationality,
            'inputName' => $request->inputName,
            'inputEmail' => $request->inputEmail,
            'phoneNumber' => $request->phoneNumber,
            'state' => $request->state,
            'orgniztionName' => $request->orgniztionName,
        ]);
        return redirect('/');
    }

    public function indexnew(Request $request)
    {
        //  dd($request->all());


        $request->validate([
            'letter' => 'required',
            'candidateImage' => 'required',
            'passportimages' => 'required',
            'release' => 'required',
            'publishedWorks' => 'required',
            'place' => 'required',
            'title' => 'required',
            'relation' => 'required',
            'about' => 'required',
            'idNumber' => 'required',
            'inputNationality' => 'required',
            'inputName' => 'required',
            'inputEmail' => 'required',
            'phoneNumber' => 'required',
            'state' => 'required',
            'orgniztionName' => 'required',




        ]);

        if (isset($request->letter) && !empty($request->letter)) {
            $letter  = Storage::disk('public')->put('upload/', $request->letter);
        } else {
            $letter  = null;
        }
        if (isset($request->candidateImage) && !empty($request->candidateImage)) {
            $candidateImage  = Storage::disk('public')->put('upload/', $request->candidateImage);
        } else {
            $candidateImage  = null;
        }
        if (isset($request->passportimages) && !empty($request->passportimages)) {
            $passportimages  = Storage::disk('public')->put('upload/', $request->passportimages);
        } else {
            $passportimages  = null;
        }
        if (isset($request->publishedWorks) && !empty($request->publishedWorks)) {
            $publishedWorks  = Storage::disk('public')->put('upload/', $request->publishedWorks);
        } else {
            $publishedWorks  = null;
        }

        if (isset($request->publishedWorks1) && !empty($request->publishedWorks1)) {
            $publishedWorks1  = Storage::disk('public')->put('upload/', $request->publishedWorks1);
        } else {
            $publishedWorks1 = null;
        }

        if (isset($request->publishedWorks2) && !empty($request->publishedWorks2)) {
            $publishedWorks2  = Storage::disk('public')->put('upload/', $request->publishedWorks2);
        } else {
            $publishedWorks2  = null;
        }

        if (isset($request->publishedWorks3) && !empty($request->publishedWorks3)) {
            $publishedWorks3  = Storage::disk('public')->put('upload/', $request->publishedWorks3);
        } else {
            $publishedWorks3  = null;
        }

        if (isset($request->publishedWorks4) && !empty($request->publishedWorks4)) {
            $publishedWorks4  = Storage::disk('public')->put('upload/', $request->publishedWorks4);
        } else {
            $publishedWorks4  = null;
        }

        if (isset($request->publishedWorks5) && !empty($request->publishedWorks5)) {
            $publishedWorks5  = Storage::disk('public')->put('upload/', $request->publishedWorks5);
        } else {
            $publishedWorks5  = null;
        }



        Competition4::create([
            'type' => $request->type,
            'letter' => $letter,
            'candidateImage' => $candidateImage,
            'passportimages' => $passportimages,
            'publishedWorks' => $publishedWorks,
            'release' => $request->release,
            'place' => $request->place,
            'title' => $request->title,
            'relation' => $request->relation,
            'about' => $request->about,
            'idNumber' => $request->idNumber,
            'inputNationality' => $request->inputNationality,
            'inputName' => $request->inputName,
            'inputEmail' => $request->inputEmail,
            'phoneNumber' => $request->phoneNumber,
            'state' => $request->state,
            'orgniztionName' => $request->orgniztionName,

            'publishedWorks1' => $publishedWorks1,
            'release1' => $request->release1,
            'place1' => $request->place1,
            'title1' => $request->title1,

            'publishedWorks2' => $publishedWorks2,
            'release2' => $request->release2,
            'place2' => $request->place2,
            'title2' => $request->title2,

            'publishedWorks3' => $publishedWorks3,
            'release3' => $request->release3,
            'place3' => $request->place3,
            'title3' => $request->title3,

            'publishedWorks4' => $publishedWorks4,
            'release4' => $request->release4,
            'place4' => $request->place4,
            'title4' => $request->title4,

            'publishedWorks5' => $publishedWorks5,
            'release5' => $request->release5,
            'place5' => $request->place5,
            'title5' => $request->title5,


        ]);
        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $competition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition $competition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        //
    }
}
