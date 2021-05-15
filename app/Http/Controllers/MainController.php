<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{

    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public  function home(){


        $profiles = Profiles::all();

            return view('home.home', [
             'profiles'  => $profiles
            ]);
    }
}
