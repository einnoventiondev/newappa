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
use App\Models\FormField;
use App\Models\Corporate2;
use App\Models\University;
use App\Models\individual1;
use App\Models\individual2;
use App\Models\ContactUs;
use App\Models\University_field;
use App\Models\Corporate1_field;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PDF;

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

    public function corporation1(Request $request)
    {
        // dd($request->authentic_cv);
        $authentic_program = array();
        $authentic_history = array();
        $authentic_place = array();
        $authentic_history1 = array();
        $authentic_target = array();
        $authentic_programs = $request->authentic_program;
        $authentic_historys = $request->authentic_history;
        $authentic_places = $request->authentic_place;
        $authentic_history1s = $request->authentic_history1;
        $authentic_targets = $request->authentic_target;
        // dd($request->all());
        $corporate = new Corporate1;
        $corporate->authentic_name = $request->authentic_name;
        $corporate->authentic_type = $request->authentic_type;
        $corporate->authentic_date = $request->authentic_date;
        $corporate->authentic_project = $request->authentic_project;
        $corporate->authentic_company = $request->authentic_company;
        $corporate->authentic_options = $request->authentic_options;
        $corporate->authentic_manager_name = $request->authentic_manager_name;
        $corporate->authentic_email = $request->authentic_email;
        $corporate->authentic_country = $request->authentic_country;
        $corporate->authentic_idea = $request->authentic_idea;
        $corporate->authentic_link = $request->authentic_link;
        $corporate->authentic_contact = $request->authentic_contact;
        $corporate->authentic_city = $request->authentic_city;
        $corporate->accept = 0;
        $path = array();
        if ($request->hasfile('authentic_cv')) {
            foreach ($request->file('authentic_cv') as $image1) {
                $extenstion = $image1->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $image1->move('authentic/image/', $filename);

                $path[] = $filename;
            }
            $corporate->authentic_cv = json_encode($path);
        }
        $corporate->authentic_program = json_encode($authentic_programs);
        $corporate->authentic_history = json_encode($authentic_historys);
        $corporate->authentic_place = json_encode($authentic_places);
        $corporate->authentic_history1 = json_encode($authentic_history1s);
        $corporate->authentic_target = json_encode($authentic_targets);

        $corporate->save();
        return redirect('/')->with('success', 'Your Form has been submitted successfully');
    }
    public function corporation2(Request $request)
    {
        $corporate = new Corporate2;
        $corporate->behalf_candidate_name = $request->behalf_candidate_name;
        $corporate->behalf_options = $request->behalf_options;
        $corporate->behalf_name = $request->behalf_name;
        $corporate->behalf_type = $request->behalf_type;
        $corporate->behalf_date = $request->behalf_date;
        $corporate->behalf_company_name = $request->behalf_company_name;
        $corporate->behalf_options1 = $request->behalf_options1;
        $corporate->behalf_project = $request->behalf_project;
        $corporate->behalf_number = $request->behalf_number;
        $corporate->behalf_email = $request->behalf_email;
        $corporate->behalf_country = $request->behalf_country;
        $corporate->behalf_city = $request->behalf_city;
        $corporate->behalf_about = $request->behalf_about;
        $corporate->accept = 0;
        $corporate->save();
        return redirect('/')->with('success', 'Your Form has been submitted successfully');
    }
    public function individual1(Request $request)
    {
        //   dd($request->all());
        $corporate = new individual1;
        $corporate->authentic_name = $request->authentic_name;
        $corporate->authentic_type = $request->authentic_type;
        $corporate->authentic_date = $request->authentic_date;
        $corporate->authentic_age = $request->authentic_age;                     //new added for corporate form
        $corporate->authentic_choose = $request->authentic_choose;                     //new added for corporate form
        $corporate->authentic_condition = $request->authentic_condition;                     //new added for corporate form
        $corporate->authentic_project = $request->authentic_project;
        $corporate->authentic_company = $request->authentic_company;
        $corporate->authentic_options = $request->authentic_options;

        $corporate->authentic_email = $request->authentic_email;
        $corporate->authentic_country = $request->authentic_country;
        $corporate->authentic_idea = $request->authentic_idea;
        $corporate->authentic_link = $request->authentic_link;
        $corporate->authentic_contact = $request->authentic_contact;
        $corporate->authentic_city = $request->authentic_city;

        //
        $corporate->authentic_program = json_encode($request->authentic_program);
        $corporate->authentic_history = json_encode($request->authentic_history);
        $corporate->authentic_place = json_encode($request->authentic_place);
        $corporate->authentic_history1 = json_encode($request->authentic_history1);
        $corporate->authentic_target = json_encode($request->authentic_target);
        $corporate->accept = 0;

        $path1 = array();


        if ($request->hasfile('authentic_cv')) {
            foreach ($request->file('authentic_cv') as $image1) {
                $extenstion = $image1->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $image1->move('authentic/image/', $filename);

                $path[] = $filename;
            }
            $corporate->authentic_cv = json_encode($path);
        }
        $corporate->save();
        return redirect('/')->with('success', 'Your Form has been submitted successfully');
    }
    public function individual2(Request $request)
    {

        $corporate = new individual2;
        $corporate->behalf_candidate_name = $request->behalf_candidate_name;
        $corporate->behalf_number = $request->behalf_number;
        $corporate->behalf_email = $request->behalf_email;
        $corporate->behalf_age = $request->behalf_age; //new added for indivi form
        $corporate->behalf_choose = $request->behalf_choose; //new added for indivi form
        $corporate->behalf_condition = $request->behalf_condition; //new added for indivi form
        $corporate->behalf_options = $request->behalf_options;
        $corporate->behalf_name = $request->behalf_name;
        $corporate->behalf_type = $request->behalf_type;
        $corporate->behalf_date = $request->behalf_date;
        $corporate->behalf_country = $request->behalf_country;
        $corporate->behalf_city = $request->behalf_city;
        $corporate->behalf_about = $request->behalf_about;
        $corporate->behalf_site = $request->behalf_site;
        $corporate->accept = 0;
        $corporate->save();
        return redirect('/')->with('success', 'Your Form has been submitted successfully');
    }

    public function sendemail(Request $request)
    {
        $contact = new Contactus;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $user = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' =>  $request->message,
        ];

        $sender = ':  اتصل بنا ';
        $reply = $user['email'];
        Mail::send('emails.contactmail', ['user' => $user], function ($message) use ($reply, $sender) {
            $message->to('noumanhayat786@gmail.com')->subject($sender)
                ->from($reply);
        });

        return redirect('/')->with('success', 'Your Form has been submitted successfully');
    }

    public function index2(Request $request)
    {
        $compitition = new Competition;
        $compitition->type = $request->type;
        $compitition->form = $request->form;
        //   $compitition->release = $request->release;
        //   $compitition->place = $request->place;
        //   $compitition->title = $request->title;
        $compitition->relation = $request->relation;
        $compitition->about = $request->about;
        $compitition->idNumber = $request->idNumber;;
        $compitition->inputNationality = $request->inputNationality;
        $compitition->inputName = $request->inputName;
        $compitition->inputEmail = $request->inputEmail;
        $compitition->phoneNumber = $request->phoneNumber;
        $compitition->state = $request->state;
        $compitition->orgniztionName = $request->orgniztionName;
        $compitition->sung_poem = $request->sung_poem;
        $compitition->singer_name = $request->singer_name;
        $compitition->composer_name = $request->composer_name;
        $compitition->date_of_registration = $request->date_of_registration;
        if ($request->hasfile('song')) {
            $file = $request->file('song');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/songs/', $filename);
            $compitition->song = $filename;
        }
        if ($request->hasfile('letter')) {
            $file = $request->file('letter');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/letter/', $filename);
            $compitition->letter = $filename;
        }
        if ($request->hasfile('candidateImage')) {
            $file = $request->file('candidateImage');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/candidateImage/', $filename);
            $compitition->candidateImage = $filename;
        }
        if ($request->hasfile('passportimages')) {
            $file = $request->file('passportimages');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/passportimages/', $filename);
            $compitition->passportimages = $filename;
        }


        //   $compitition->	phone_number2  = $request->phone_number2;

        $compitition->save();

        $competition_id = $compitition->id;
        $releases = $request->release;
        $titles = $request->title;
        $places = $request->place;

        $form = $request->form;
        $type = $request->type;
        $files = $request->publishedWorks;



        foreach ($request->title as $key => $title) {

            $form_field = new FormField;
            $form_field->competition_id = $competition_id;


            $form_field->form = $form;
            $form_field->type = $type;

            $form_field->title   = $title;
            $form_field->release = $releases[$key];
            $file = $files[$key];
            if ($file) {
                $extenstion = $file->getClientOriginalExtension();
                $filename = 'document-' . $key . '-' . time() . '.' . $extenstion;
                $file->move('uploads/publishedWorks/', $filename);
                $form_field->publishedWorks = $filename;
            }
            $form_field->place = $places[$key];
            $form_field->save();
        }



        return redirect('/')->with('success', 'Your Form has been submitted successfully');

        //   $compitition->	age   = $request->age;
        //   $compitition->	uni_number =$request-> uni_number;
        //   $compitition->	uni_email = $request->uni_email;
        //  $compitition->	fieldname  = $request->fieldname;




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
        return redirect('/')->with('success', 'Your Form has been submitted successfully');
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
        return redirect('/')->with('success', 'Your Form has been submitted successfully');
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
        return redirect('/')->with('success', 'Your Form has been submitted successfully');
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

    public function university(Request $request)
    {
        $universities = new University;
        $universities->type = $request->type;
        $universities->form = $request->form;
        $universities->orgniztionName = $request->orgniztionName;
        $universities->state = $request->state;
        $universities->fieldname = $request->fieldname;
        $universities->phoneNumber = $request->phoneNumber;
        $universities->inputEmail = $request->inputEmail;
        $universities->inputName = $request->inputName;
        $universities->inputNationality = $request->inputNationality;
        $universities->age = $request->age;
        $universities->idNumber = $request->idNumber;
        $universities->uniNumber = $request->uniNumber;
        $universities->uniEmail = $request->uniEmail;
        $universities->phoneNumber2 = $request->phoneNumber2;
        $universities->about = $request->about;
        $universities->accept = 0;
        $universities->relation = $request->relation;
        if ($request->hasfile('letter')) {
            $file = $request->file('letter');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/letter/', $filename);
            $universities->letter = $filename;
        }
        if ($request->hasfile('publishedWork')) {
            $file = $request->file('publishedWork');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/publishedWorks/', $filename);
            $universities->publishedWorks = $filename;
        }

        if ($request->hasfile('candidateImage')) {
            $file = $request->file('candidateImage');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/candidateImage/', $filename);
            $universities->candidateImage = $filename;
        }
        if ($request->hasfile('passportimages')) {
            $file = $request->file('passportimages');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/passportimages/', $filename);
            $universities->passportimages = $filename;
        }

        // dd($request->all());

        $universities->save();

        $university_id = $universities->id;
        $releases = $request->release;
        $titles = $request->title;
        $places = $request->place;

        $form = $request->form;
        $type = $request->type;
        $files = $request->publishedWorks;

        if ($titles) {



            foreach ($request->title as $key => $title) {

                $university_field = new University_field;
                $university_field->university_id = $university_id;


                $university_field->form = $form;
                $university_field->type = $type;

                $university_field->title   = $title;
                $university_field->place = $places[$key];
                $university_field->release = $releases[$key];
                $file1 = $files[$key];
                if ($file1) {
                    $extenstion = $file1->getClientOriginalExtension();
                    $filename = 'document-' . $key . '-' . time() . '.' . $extenstion;
                    $file1->move('uploads/publishedWorks/', $filename);
                    $university_field->publishedWorks = $filename;
                }
                $university_field->save();
            }
        }


        return redirect('/')->with('success', 'Your Form has been submitted successfully');
    }

    public function unistatus(Request $request , $id)
    {
        $universities = University::find($id);
        if ($universities->accept == 0) {

            $universities->accept = 1;
            $universities->save();
            return response()->json([
                'success'=>"status changed successfully",               //This is because of the pop-up on Approval Button redirect to next page
            ]);
           
        }
        if ($universities->accept == 1) {
            $universities->accept = 0;
            $universities->save();
            return back();
        }
    }

    public function status(Request $request , $id)
    {  
        $competitions = Competition::find($id);
        if ($competitions->accept == 0) {

            $competitions->accept = 1;
            $competitions->save();
            return response()->json([
                'success'=>"status changed successfully",               //This is because of the pop-up on Approval Button redirect to next page
            ]);
        }
           
        if ($competitions->accept == 1) {
            $competitions->accept = 0;
            $competitions->save();
            return back();
        }
    }
    public function authenticity(Request $request , $id)

    {
        $corporate1 = Corporate1::find($id);
        if ($corporate1->accept == 0) {

            $corporate1->accept = 1;
            $corporate1->save();
            return response()->json([
                'success'=>"status changed successfully",               //This is because of the pop-up on Approval Button redirect to next page
            ]);
           
        }
        if ($corporate1->accept == 1) {

            $corporate1->accept = 0;
            $corporate1->save();
            return back();
        }
    }
    public function behalf($id)
    {
        $corporate2 = Corporate2::find($id);
        if ($corporate2->accept == 0) {

            $corporate2->accept = 1;
            $corporate2->save();
            return back();
        }
        if ($corporate2->accept == 1) {

            $corporate2->accept = 0;
            $corporate2->save();
            return back();
        }
    }
    public function authenticity_single(Request $request ,$id)
    {
        $individual1 = Individual1::find($id);
        if ($individual1->accept == 0) {

            $individual1->accept = 1;
            $individual1->save();
             return response()->json([
                'success'=>"status changed successfully",               //This is because of the pop-up on Approval Button redirect to next page
            ]);
           
        }
        if ($individual1->accept == 1) {

            $individual1->accept = 0;
            $individual1->save();
            return back();
        };
    }
    public function behalf_single($id)
    {
        $individual2 = Individual2::find($id);
        if ($individual2->accept == 0) {

            $individual2->accept = 1;
            $individual2->save();
            return back();
        }
        if ($individual2->accept == 1) {

            $individual2->accept = 0;
            $individual2->save();
            return back();
        };
    }
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('itsolutionstuff.pdf');
    }
}
