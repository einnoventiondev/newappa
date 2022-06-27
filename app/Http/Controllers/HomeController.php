<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Competition1;
use App\Models\competition2;
use App\Models\Competition4;
use App\Models\User;
use App\Models\University;
use App\Models\Corporate1;
use App\Models\Corporate2;
use App\Models\individual1;
use App\Models\individual2;
use App\Models\FormField;
use App\Models\University_field;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function institute3()
    {
        $corporate1 = Corporate1::all();
        $corporate2 = Corporate2::all();

        return view('admin.institute', compact('corporate1', 'corporate2'));
    }
    public function individuale3()
    {
        $individual1 = individual1::all();
        $individual2 = individual2::all();
        return view('admin.individuale', compact('individual1', 'individual2'));
    }
    public function showcorporate($id)
    {
        $data = Competition::find($id);
        $field = FormField::where('competition_id', $id)->get();
        return view('admin.corporateshow8', compact('data', 'field'));
    }
    public function showsinging($id)
    {
        $data = Competition::find($id);
        $field = FormField::where('competition_id', $id)->get();
        return view('admin.corporateshow9', compact('data', 'field'));
    }
    public function showuniversity($id)
    {

        $data = University::find($id);
        $field = University_field::where('university_id', $id)->get();

        // return $field;
        return view('admin.universityshow', compact('data', 'field'));
    }
    public function showcorporate1($id)
    {
        $data = Competition::find($id);
        $field = FormField::where('competition_id', $id)->get();
        return view('admin.corporateshow1', compact('data', 'field'));
    }
    public function showcorporate9($id)
    {
        $data = Competition::find($id);
        $field = FormField::where('competition_id', $id)->get();
        return view('admin.individuale10', compact('data', 'field'));
    }
    public function destroy_data($id)
    {
        $competitions = Competition::destroy($id);
        
        return back()->with('success', 'FileExtention Delete Successfully');
    }
    public function destroy_data9($id)
    {
        $corporate1 = Corporate1::destroy($id);
        return back()->with('success', 'FileExtention Delete Successfully');
    }
    public function destroy_data10($id)
    {
        $university = University::destroy($id);
        return back()->with('success', 'FileExtention Delete Successfully');
    }
    public function showcorporate2($id)
    {
        $data = Corporate2::find($id);
        return view('admin.showcorporate2', compact('data'));
    }
    public function destroy_data2($id)
    {
        Corporate2::destroy($id);
        return redirect()->route('institute3')->with('success', 'FileExtention Delete Successfully');
    }
    public function showindividual($id)
    {

        $data = individual1::find($id);
        if ($data == null) //For getting rid of the id issue in the view of the application
        {
            return "Record not Found";
        } else {
            return view('admin.individualshow', compact('data'));
        }
    }
    public function destroy_data_individual($id)
    {
        individual1::destroy($id);
        return back()->with('success', 'FileExtention Delete Successfully');
    }
    public function showindividual2($id)
    {
        $data = individual2::find($id);
        return view('admin.showindividual2', compact('data'));
    }
    public function showindividual3($id)
    {
        // otherfile
        $data = Corporate1::find($id);
        if ($data == null) { //For getting rid of the issue of the ID showing in the different views of the application pages
            return "Record Not Found";
        } else {
            return view('admin.showindividual3', compact('data'));
        }
    }
    public function destroy_data_individual2($id)
    {
        individual2::destroy($id);
        return back()->with('success', 'FileExtension Delete Successfully');
    }

    public function index()
    {
        return view('home');
    }
    public function institute()
    {
        // $corporate1=Corporate1::all();
        // $corporate2=Corporate2::all();
        $competitions = Competition::where([['type', '=', '2'], ['form', '=', 'five'],])->get();

        return view('admin.institute8', compact('competitions'));
    }
    public function theatrical()
    {
        // $corporate1=Corporate1::all();
        // $corporate2=Corporate2::all();
        $competitions = Competition::where([['type', '=', '2'], ['form', '=', 'first'],])->get();

        return view('admin.institute8', compact('competitions'));
    }
    public function individuale()
    {
        // $individual1=individual1::all();
        // $individual2=individual2::all();
        $competitions = Competition::where([['type', '=', '1'], ['form', '=', 'first'],])->get();
        return view('admin.individuale8', compact('competitions'));
    }
    public function institute2()
    {
        $competitions = Competition::where([['type', '=', '2'], ['form', '=', 'second'],])->get();

        return view('admin.institute9', compact('competitions'));
    }
    public function individuale2()
    {
        $competitions = Competition::with('formfield')->where([['type', '=', '1'], ['form', '=', 'second'],])->get();
        return view('admin.individuale9', compact('competitions'));
    }

    public function institute5()
    {

        $competitions = Competition::where([['type', '=', '2'], ['form', '=', 'five'],])->get();
        return view('admin.institute8', compact('competitions'));
    }
    public function individuale5()
    {
        $competitions = Competition::with('formfield')->where([['type', '=', '1'], ['form', '=', 'five'],])->get();
        return view('admin.individuale8', compact('competitions'));
    }
    public function institute6()
    {
        $competitions = Competition::where([['type', '=', '1'], ['form', '=', 'five'],])->get();
        return view('admin.institute', compact('competitions'));
    }
    public function university()
    {
        $universities = University::where([['type', '=', '2'], ['form', '=', 'six'],])->get();
        return view('admin.university', compact('universities'));
    }
    public function institute7()
    {
        $corporate1 = Corporate1::all();
        $corporate2 = Corporate2::all();
        return view('admin.institute', compact('corporate1', 'corporate2'));
    }

    public function institute8()
    {
        $competitions = Competition::where([['type', '=', '2'],     ['form', '=', 'eight'],])->get();
        return view('admin.institute8', compact('competitions'));
    }

    public function destroy(Request $request)
    {
        // dd($request->id);
        Competition::find($request->id)->delete();
        return redirect()->back();
    }

    public function show($id)
    {
        $data = Competition::find($id);
        return view('admin.show', compact('data'));
    }

    public function accept($id)
    {
        $data = Competition::find($id);
        if (auth()->user()->role == 'admin1') {
            $data->accept = 1;
        } else {
            $data->accept = 2;
        }
        $data->save();
        return view('admin.show', compact('data'));
    }

    public function userprofile()
    {
        return view('admin.editprofile');
    }
    public function profileupdate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
        ]);
        if (Hash::check($request->password, auth()->user()->password)) {
            // dd($request->all());
            if ($request->hasFile('profile')) {
                if (isset($request->profile) && !empty($request->profile)) {
                    if (!empty(auth()->user()->profile)) {
                        Storage::disk('public')->delete(auth()->user()->profile);
                    }
                    $profile  = Storage::disk('public')->put('upload/', $request->profile);
                }
            } else {
                $profile  = (auth()->user()->profile);
            }
            User::find(auth()->user()->id)->update([
                'profile' => $profile,
                'name' => $request->name,
                'email' => $request->email,
            ]);
            return redirect()->route('home');
        }
    }
    public function editpassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'newpassword' => 'required',
        ]);
        if (Hash::check($request->password, auth()->user()->password)) {
            User::find(auth()->user()->id)->update([
                'password' => Hash::make($request->newpassword),
            ]);
            return redirect()->route('home');
        }
    }
    public function editpass()
    {
        return view('admin.editpassword');
    }


    public function index4()
    {
        $data = Competition4::all();
        return view('admin.index4', compact('data'));
    }

    public function destroy1(Request $request)
    {
        // dd($request->id);
        Competition1::find($request->id)->delete();
        return redirect()->back();
    }
    public function destroy2(Request $request)
    {
        // dd($request->id);
        Competition2::find($request->id)->delete();
        return redirect()->back();
    }


    public function destroyindex(Request $request)
    {
        // dd($request->id);
        Competition4::find($request->id)->delete();
        return redirect()->back();
    }

    public function show1($id)
    {
        $data = Competition1::find($id);
        return view('admin.show1', compact('data'));
    }
    public function show2($id)
    {
        $data = Competition2::find($id);
        return view('admin.show2', compact('data'));
    }
    public function show4($id)
    {
        $data = Competition4::find($id);
        return view('admin.show4', compact('data'));
    }

    public function register_new_form()
    {
        return view('auth.auth_new');
    }

    public function register_new(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('register_user');
    }

    public function delete_user($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function register_user()
    {
        $user = User::all();
        return view('auth.auth_users', compact('user'));
    }
    public function edit_admin($id)
    {
        $admin = User::find($id);
        return view('auth.edit_admin', compact('admin'));
    }
    public function update_admin(Request $request)
    {
        User::find($request->hidden)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        return view('/home');
    }
}
