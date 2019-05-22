<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pekerjaan;
use Illuminate\Support\Facades\Auth;

class PekerjaanController extends Controller
{
    //

    public function apply($id)
    {
        $jobs = Pekerjaan::find($id);
        $user = Auth::user();
        $statcv = Auth::user()->hascv->statfile;
        // dd($statcv);
        if($statcv == 'Accept') {
            $user->jobs()->attach($jobs);
            return view('user.jobadd');
        } else {
            return redirect()->route('upload.edit',Auth::user()->hascv->id);
        }
        
    }
}