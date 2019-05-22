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
        $user->jobs()->attach($jobs);

        return view('user.jobadd');
    }
}