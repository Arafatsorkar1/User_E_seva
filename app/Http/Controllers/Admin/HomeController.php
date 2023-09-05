<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transasction\trensactionHead;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Fortify\Fortify;
use voku\helper\ASCII;

class HomeController extends Controller
{
    public  function  dashboard()
    {
        $user = auth()->user();
        if ($user->type == 'user' && $user->status == 'approve')
        {
                return redirect()->route('front-Home');

//                return redirect()->route('front-Home');


        }

//        {
//            return redirect()->route('front-Home');
//        }
        elseif ($user->type == 'admin')
        {
            return view('Admin.Dashboard.home.home',[

            ]);
        }
        else{
            return view('Front.HomePage.home');
        }
//        return view('Admin.Dashboard.home.home');
    }
}
