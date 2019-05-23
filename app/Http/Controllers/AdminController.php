<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pekerjaan;
use App\UserDetail;
use App\CV;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.jobs');
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
        $jobs = new Pekerjaan();
        $jobs->n_pekerjaan = $request->jobs;
        $jobs->d_pekerjaan = $request->desc;
        $jobs->save();
        return redirect('admin');
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
    public function update(Request $request, $id)
    {
        //
        $stat = CV::find($id);
        $stat->statfile = $request->submit;
        $stat->save();
        // dd($request->all());
        return redirect('admin');
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
        // dd($id);
        Pekerjaan::destroy($id);
        return redirect()->route('jlist');
    }

    public function muser()
    {
        $user = User::all();
        return view('admin.muser',compact('user'));
    }

    public function jlist()
    {
        $jobs = Pekerjaan::all();
        return view('admin.jlist',compact('jobs'));
    }

    public function showcv()
    {
        $showcv = CV::all();
        return view('admin.index',compact('showcv'));
    }
}
