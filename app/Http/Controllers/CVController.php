<?php

namespace App\Http\Controllers;

use App\CV;
use Illuminate\Http\Request;
use Validator;
use File;
use Illuminate\Support\Facades\Auth;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.uploadcv');
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
        $request->validate([
            'userfile' => 'required|file|mimes:pdf'
        ]);
        $cv = new CV();
        if(empty(Auth::user()->userdetail)){
            return redirect()->route('user.create');
        } else {
            $file = $request->file('userfile');
            $destination_path = 'cv/';
            $filename = $file->getClientOriginalName();
            $file->move($destination_path,$filename);
            $cv->file = $destination_path . $filename;

        // dd($file);
            $cv->user_id = Auth::user()->id;
            $cv->save();

            return redirect('user');
        }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function show(CV $cV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $euploadcv = CV::find($id);
        return view('user.euploadcv',compact('euploadcv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'userfile' => 'required|file|mimes:pdf'
        ]);
        $cv = CV::find($id);
        if($file = $request->file('userfile')){
            File::delete($cv->file);
            $file = $request->file('userfile');
            $destination_path = 'cv/';
            $filename = $file->getClientOriginalName();
            $file->move($destination_path,$filename);
            $cv->file = $destination_path . $filename;
            $cv->statfile = 'Unread';
        }
        // dd($file);
        
        $cv->user_id = Auth::user()->id;
        $cv->save();

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CV  $cV
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
