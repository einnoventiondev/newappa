<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Competition1;
use App\Models\competition2;
use App\Models\Competition4;
use App\Models\User;
use App\Models\Corporate1;
use App\Models\Corporate2;
use App\Models\individual1;
use App\Models\individual2;
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
        $corporate1=Corporate1::all();
        $corporate2=Corporate2::all();

        return view('admin.institute', compact('corporate1','corporate2'));
    }
    public function individuale3()
    {
       $individual1=individual1::all();
       $individual2=individual2::all();
        return view('admin.individuale', compact('individual1','individual2'));
    }
    public function showcorporate($id){
        $data = Corporate1::find($id);
        return view('admin.corporateshow', compact('data'));
    }
    public function destroy_data($id)
    {
        Corporate1::destroy($id);
     return redirect()->route('institute3')->with('success','FileExtention Delete Successfully');
    }
    public function showcorporate2($id){
        $data = Corporate2::find($id);
        return view('admin.showcorporate2', compact('data'));
    }
    public function destroy_data2($id)
    {
        Corporate2::destroy($id);
     return redirect()->route('institute3')->with('success','FileExtention Delete Successfully');
    }
    public function showindividual($id){
        $data = individual1::find($id);
        return view('admin.individualshow', compact('data'));
    }
    public function destroy_data_individual($id)
    {
        individual1::destroy($id);
     return redirect()->route('individual3')->with('success','FileExtention Delete Successfully');
    }
    public function showindividual2($id){
        $data = individual2::find($id);
        return view('admin.showindividual2', compact('data'));
    }
    public function destroy_data_individual2($id)
    {
        individual2::destroy($id);
     return redirect()->route('individual3')->with('success','FileExtention Delete Successfully');
    }



    public function index()
    {
        return view('home');
    }
    public function institute()
    {
        $corporate1=Corporate1::all();
        $corporate2=Corporate2::all();

        return view('admin.institute', compact('corporate1','corporate2'));
    }
    public function individuale()
    {
        $individual1=individual1::all();
        $individual2=individual2::all();
         return view('admin.individuale', compact('individual1','individual2'));
    }
    public function institute2()
    {
        $corporate1=Corporate1::all();
        $corporate2=Corporate2::all();

        return view('admin.institute', compact('corporate1','corporate2'));
    }
    public function individuale2()
    {
        $individual1=individual1::all();
        $individual2=individual2::all();
         return view('admin.individuale', compact('individual1','individual2'));
    }

    public function institute5()
    {
        $corporate1=Corporate1::all();
        $corporate2=Corporate2::all();
        return view('admin.institute', compact('corporate1','corporate2'));
    }
    public function individuale5()
    {
        $individual1=individual1::all();
        $individual2=individual2::all();
         return view('admin.individuale', compact('individual1','individual2'));
    }
    public function institute6()
    {
        $corporate1=Corporate1::all();
        $corporate2=Corporate2::all();
        return view('admin.institute', compact('corporate1','corporate2'));
    }
    public function institute7()
    {
        $corporate1=Corporate1::all();
        $corporate2=Corporate2::all();
        return view('admin.institute', compact('corporate1','corporate2'));
    }

       public function institute8()
    {
        $corporate1=Corporate1::all();
        $corporate2=Corporate2::all();
        return view('admin.institute', compact('corporate1','corporate2'));
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
}
