<?php

namespace App\Http\Controllers;

use App\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pekerjaan;
use App\User;
use File;
use App\CV;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = Pekerjaan::all();
        return view('user.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.userdetail');
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
        $detail = new UserDetail();
        // dd($request->file('userfile'));

        $request->validate([
            'notelp' => 'required|max:13'
        ]); 

        //save to database
        $detail->user_id = $request->user_id;
        $detail->nama = $request->nama;
        $detail->email = $request->email;
        $detail->alamat = $request->alamat;
        $detail->gender = $request->gender;
        $detail->notelp = $request->notelp;
        $detail->ttl = $request->ttl;
        $detail->sd = $request->sd;
        $detail->smp = $request->smp;
        $detail->sma = $request->sma;
        $detail->universitas = $request->universitas;
        $detail->kemampuan = $request->kemampuan;
        $detail->save();

        return redirect('upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $detail = UserDetail::find($id);
        // dd($detail);
        if(empty(Auth::user()->userdetail)){
            return redirect()->route('user.create');
        } else {
            return view('user.edit',compact('detail'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $detail = UserDetail::find($id);

        $request->validate([
            'notelp' => 'required|max:13'
        ]); 
        //
        // dd($request->all());
        if($request->hasFile('userfile')){
            File::delete($detail->file);
            $file = $request->file('userfile');
            $destination_path = 'cv/';
            $filename = 'CV'.$file->getClientOriginalName();
            $file->move($destination_path,$filename);
            $detail->file = $destination_path . $filename;
        }
        // $detail->id = $request->id;
        $detail->user_id = $request->user_id;
        $detail->nama = $request->nama;
        $detail->email = $request->email;
        $detail->alamat = $request->alamat;
        $detail->gender = $request->gender;
        $detail->ttl = $request->ttl;
        $detail->sd = $request->sd;
        $detail->smp = $request->smp;
        $detail->sma = $request->sma;
        $detail->universitas = $request->universitas;
        $detail->kemampuan = $request->kemampuan;
        $detail->save();

        return redirect()->route('user.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }

    public function editprofile()
    {
        if(empty(Auth::user()->userdetail)){
            return redirect()->route('user.create');
        } else {
            return view('user.edit');
        }
        
    }

    public function showcv()
    {
        $showcv = CV::all();
        return view('admin.index',compact('showcv'));
    }

    public function statcv($id)
    {
        $statcv = CV::find($id);
        // dd($statcv);
        return view('user.statcv',compact('statcv'));
    }

    public function carikerja()
    {
        $jobs = Pekerjaan::all();
        return view('shared.index',compact('jobs'));
    }

    public function lamarkerja()
    {
        $jobs = Pekerjaan::all();
        return view('user.index',compact('jobs'));
    }

    public function efirst()
    {
        return view('errors.efirst');
    }
}
