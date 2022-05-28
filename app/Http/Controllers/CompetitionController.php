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
use App\Models\Corporate1;
use App\Models\Corporate2;
use App\Models\individual1;
use App\Models\individual2;
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

    public function corporation1(Request $request){
      $corporate=new Corporate1;
      $corporate->authentic_name=$request->authentic_name;
      $corporate->authentic_type=$request->authentic_type;
      $corporate->authentic_date=$request->authentic_date;
      $corporate->authentic_project=$request->authentic_project;
      $corporate->authentic_company=$request->authentic_company;
      $corporate->authentic_options=$request->authentic_options;
      $corporate->authentic_manager_name=$request->authentic_manager_name;
      $corporate->authentic_email=$request->authentic_email;
      $corporate->authentic_country=$request->authentic_country;
      $corporate->authentic_idea=$request->authentic_idea;
      $corporate->authentic_link=$request->authentic_link;
      $corporate->authentic_contact=$request->authentic_contact;
      $corporate->authentic_city=$request->authentic_city;
      $corporate->authentic_program=$request->authentic_program;
      $corporate->authentic_history=$request->authentic_history;
      $corporate->authentic_place=$request->authentic_place;
      $corporate->authentic_history1=$request->authentic_history1;
      $corporate->authentic_target=$request->authentic_target;
      $corporate->check=$request->check;

      if($request->hasfile('authentic_cv')){
        $file= $request->file('authentic_cv');
        $extenstion= $file->getClientOriginalExtension();
        $filename=time().'.'.$extenstion;
        $file->move('authentic/image/', $filename);
        $corporate->authentic_cv=$filename;
    }
    if($request->hasfile('authentic_cv1')){
        $file= $request->file('authentic_cv1');
        $extenstion= $file->getClientOriginalExtension();
        $filename=time().'.'.$extenstion;
        $file->move('authentic/image/', $filename);
        $corporate->authentic_cv1=$filename;
    }
    if($request->hasfile('authentic_cv2')){
        $file= $request->file('authentic_cv2');
        $extenstion= $file->getClientOriginalExtension();
        $filename=time().'.'.$extenstion;
        $file->move('authentic/image/', $filename);
        $corporate->authentic_cv2=$filename;
    }
    if($request->hasfile('authentic_cv3')){
        $file= $request->file('authentic_cv3');
        $extenstion= $file->getClientOriginalExtension();
        $filename=time().'.'.$extenstion;
        $file->move('authentic/image/', $filename);
        $corporate->authentic_cv3=$filename;
    }

    // $corporate->authentic_program=json_encode($program);
    // $corporate->authentic_place=json_encode($place);
    // $corporate->authentic_history=json_encode($history);
    // $corporate->authentic_history1=json_encode($history1);
    // $corporate->authentic_target=json_encode($target);
      $corporate->save();
      return redirect()->back();
    }
    public function corporation2(Request $request){
        $corporate=new Corporate2;
        $corporate->behalf_candidate_name=$request->behalf_candidate_name;
        $corporate->behalf_options=$request->behalf_options;
        $corporate->behalf_name=$request->behalf_name;
        $corporate->behalf_type=$request->behalf_type;
        $corporate->behalf_date=$request->behalf_date;
        $corporate->behalf_company_name=$request->behalf_company_name;
        $corporate->behalf_options1=$request->behalf_options1;
        $corporate->behalf_project=$request->behalf_project;
        $corporate->behalf_number=$request->behalf_number;
        $corporate->behalf_email=$request->behalf_email;
        $corporate->behalf_country=$request->behalf_country;
        $corporate->behalf_city=$request->behalf_city;
        $corporate->behalf_about=$request->behalf_about;
        $corporate->save();
        return redirect()->back();
      }
      public function individual1(Request $request){
        $corporate=new individual1;
        $corporate->authentic_name=$request->authentic_name;
        $corporate->authentic_type=$request->authentic_type;
        $corporate->authentic_date=$request->authentic_date;
        $corporate->authentic_project=$request->authentic_project;
        $corporate->authentic_company=$request->authentic_company;
        $corporate->authentic_options=$request->authentic_options;

        $corporate->authentic_email=$request->authentic_email;
        $corporate->authentic_country=$request->authentic_country;
        $corporate->authentic_idea=$request->authentic_idea;
        $corporate->authentic_link=$request->authentic_link;
        $corporate->authentic_contact=$request->authentic_contact;
        $corporate->authentic_city=$request->authentic_city;
        $corporate->authentic_program=$request->authentic_program;
        $corporate->authentic_history=$request->authentic_history;
        $corporate->authentic_place=$request->authentic_place;
        $corporate->authentic_history1=$request->authentic_history1;
        $corporate->authentic_target=$request->authentic_target;
        $corporate->check=$request->check;

        if($request->hasfile('authentic_cv')){
            $file= $request->file('authentic_cv');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('authentic/image/', $filename);
            $corporate->authentic_cv=$filename;
        }
        if($request->hasfile('authentic_cv1')){
            $file= $request->file('authentic_cv1');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('authentic/image/', $filename);
            $corporate->authentic_cv1=$filename;
        }
        if($request->hasfile('authentic_cv2')){
            $file= $request->file('authentic_cv2');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('authentic/image/', $filename);
            $corporate->authentic_cv2=$filename;
        }
        if($request->hasfile('authentic_cv3')){
            $file= $request->file('authentic_cv3');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('authentic/image/', $filename);
            $corporate->authentic_cv3=$filename;
        }


      // $corporate->authentic_program=json_encode($program);
      // $corporate->authentic_place=json_encode($place);
      // $corporate->authentic_history=json_encode($history);
      // $corporate->authentic_history1=json_encode($history1);
      // $corporate->authentic_target=json_encode($target);
        $corporate->save();
        return redirect()->back();
      }
      public function individual2(Request $request){
        $corporate=new individual2;
        $corporate->behalf_candidate_name=$request->behalf_candidate_name;
        $corporate->behalf_options=$request->behalf_options;
        $corporate->behalf_name=$request->behalf_name;
        $corporate->behalf_type=$request->behalf_type;
        $corporate->behalf_date=$request->behalf_date;
        $corporate->behalf_country=$request->behalf_country;
        $corporate->behalf_city=$request->behalf_city;
        $corporate->behalf_about=$request->behalf_about;
        $corporate->behalf_site=$request->behalf_site;
        $corporate->save();
        return redirect()->back();
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
      $compitition=new Competition;
      $compitition->type = $request->type;
      $compitition->form => $request->form;
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




//         $request->validate([
//             'type' => 'required',
//         ]);

//         if ($request->type == 2) {

//             $request->validate([

//                 'release' => 'required',
//                 'place' => 'required',
//                 'title' => 'required',
//                 'relation' => 'required',
//                 'about' => 'required',
//                 'idNumber' => 'required',
//                 'state' => 'required',
//                 'inputName' => 'required',
//                 'inputEmail' => 'required',
//                 'phoneNumber' => 'required',
//                 'state' => 'required',
//                 'orgniztionName' => 'required',
//             ]);
//         }
//       if (isset($request->letter) && !empty($request->letter)) {

//          //   $letter  = Storage::disk('public')->put('upload/', $request->letter);
// 			$letter  = $request->letter->getClientOriginalName();
// 			$path = $request->file('letter')->storeAs(
//     'public/upload', $letter
// );
//         // $letter = null ;
// 		} else {
//             $letter  = null;
//         }
//         if (isset($request->candidateImage) && !empty($request->candidateImage)) {
//         $candidateImage  = $request->candidateImage->getClientOriginalName();
// 			$path = $request->file('candidateImage')->storeAs(
//     'public/upload', $candidateImage
// );
// 			// dd($path);
// 		// $candidateImage  = null;
//         } else {
//             $candidateImage  = null;
//         }
//         if (isset($request->passportimages) && !empty($request->passportimages)) {
//             // $passportimages  = Storage::disk('public')->put('upload/', $request->passportimages);
// 			$passportimages  = $request->passportimages->getClientOriginalName();
// 			$path = $request->file('passportimages')->storeAs(
//     'public/upload', $candidateImage
// );
//            //  $passportimages = null;
// 		} else {
//             $passportimages  = null;
//         }
//         if (isset($request->publishedWorks) && !empty($request->publishedWorks)) {
//         //     $publishedWorks  = Storage::disk('public')->put('upload/', $request->publishedWorks);
// 			$publishedWorks  = $request->publishedWorks->getClientOriginalName();
// 			$path = $request->file('publishedWorks')->storeAs(
//     'public/upload', $publishedWorks
// );
//       //   $publishedWorks = null;
// 		} else {
//             $publishedWorks  = null;
//         }
// 		$prev = url()->previous();
// 		$link_array = explode('/',$prev);
// 		$segment = end($link_array);
// 		if($segment == 'six' || $segment == 'seven')
// 		{
// 			$fieldname = $request->fieldname;
// 			$age = $request->age;
// 			$uni_number = $request->uniNumber;
// 			$uni_email = $request->uniEmail;
// 			$phone_number2 = $request->phoneNumber2;


// 		}
// 		else{
// 		$fieldname =  'null';
// 			$age = 'null';
// 			$uni_number = 'null';
// 			$uni_email = 'null';
// 			$phone_number2 ='null';
// 		}

//     Competition::create([
//             'type' => $request->type,
//             'form' => $request->form,
//             'letter' => $letter,
//             'publishedWorks' => $publishedWorks,
//             'candidateImage' => $candidateImage,
//             'passportimages' => $passportimages,
//             'release' => $request->release,
//             'place' => $request->place,
//             'title' => $request->title,
//             'relation' => $request->relation,
//             'about' => $request->about,
//             'idNumber' => $request->idNumber,
//             'inputNationality' => $request->inputNationality,
//             'inputName' => $request->inputName,
//             'inputEmail' => $request->inputEmail,
//             'phoneNumber' => $request->phoneNumber,
//             'state' => $request->state,
//             'orgniztionName' => $request->orgniztionName,
// 			'phone_number2'  => $phone_number2,
// 			'age'   => $age,
// 			'uni_number' => $uni_number,
// 			'uni_email' => $uni_email,
// 			'fieldname'  => $fieldname,
//         ]);
//         return redirect('/');
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
