<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $portfolio = Portfolio::where('year',$request->year)->first();
        if($portfolio){
            $year = $request->year;
            return view('User.seasonpotfolio',compact('portfolio','year'));
        }
        else
        {
            $year = $request->year;
            // return $year;
                    return view('User.seasonpotfolioedit',compact('year'));
        }


    }
    public function update(Request $request)
    {
        $year = $request->year;
// return $year;
        return view('User.seasonpotfolioedit',compact('year'));

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
        $portfolio = Portfolio::where('year', $request->year)->first();
        if ($portfolio) {
            // return 'yes';
            $portfolio->year = $request->year;
            if ($request->hasfile('video')) {
                $img = $request->file('video')->getClientOriginalName();
                $request->video->move(public_path('/video'), $img);
                $portfolio->video = $img;
            }
            if ($request->hasfile('image1')) {
                $img = $request->file('image1')->getClientOriginalName();
                $request->image1->move(public_path('/images'), $img);
                $portfolio->image1 = $img;
            }
            if ($request->hasfile('image2')) {
                $img = $request->file('image2')->getClientOriginalName();
                $request->image2->move(public_path('/images'), $img);
                $portfolio->image2 = $img;
            }
            if ($request->hasfile('image3')) {
                $img = $request->file('image3')->getClientOriginalName();
                $request->image3->move(public_path('/images'), $img);
                $portfolio->image3 = $img;
            }
            if ($request->hasfile('image4')) {
                $img = $request->file('image4')->getClientOriginalName();
                $request->image4->move(public_path('/images'), $img);
                $portfolio->image4 = $img;
            }
            if ($request->hasfile('image5')) {
                $img = $request->file('image5')->getClientOriginalName();
                $request->image5->move(public_path('/images'), $img);
                $portfolio->image5 = $img;
            }
            if ($request->hasfile('image6')) {
                $img = $request->file('image6')->getClientOriginalName();
                $request->image6->move(public_path('/images'), $img);
                $portfolio->image6 = $img;
            }
            $portfolio->save();

            $portfolio = Portfolio::where('year',$request->year)->first();
                $year = $request->year;
                return view('User.seasonpotfolio',compact('portfolio','year'));
        } else {

            $portfolio = new Portfolio();
            $portfolio->year = $request->year;
            if ($request->hasfile('video')) {
                $img = $request->file('video')->getClientOriginalName();
                $request->video->move(public_path('/video'), $img);
                $portfolio->video = $img;
            }
            if ($request->hasfile('image1')) {
                $img = $request->file('image1')->getClientOriginalName();
                $request->image1->move(public_path('/images'), $img);
                $portfolio->image1 = $img;
            }
            if ($request->hasfile('image2')) {
                $img = $request->file('image2')->getClientOriginalName();
                $request->image2->move(public_path('/images'), $img);
                $portfolio->image2 = $img;
            }
            if ($request->hasfile('image3')) {
                $img = $request->file('image3')->getClientOriginalName();
                $request->image3->move(public_path('/images'), $img);
                $portfolio->image3 = $img;
            }
            if ($request->hasfile('image4')) {
                $img = $request->file('image4')->getClientOriginalName();
                $request->image4->move(public_path('/images'), $img);
                $portfolio->image4 = $img;
            }
            if ($request->hasfile('image5')) {
                $img = $request->file('image5')->getClientOriginalName();
                $request->image5->move(public_path('/images'), $img);
                $portfolio->image5 = $img;
            }
            if ($request->hasfile('image6')) {
                $img = $request->file('image6')->getClientOriginalName();
                $request->image6->move(public_path('/images'), $img);
                $portfolio->image6 = $img;
            }
            $portfolio->save();

            $portfolio = Portfolio::where('year',$request->year)->first();
                $year = $request->year;
                return view('User.seasonpotfolio',compact('portfolio','year'));

            // return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updfate(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
