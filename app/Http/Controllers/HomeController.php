<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): View
    {
        return view('home');
    }
    public function adminHome(): View
    {
        return view('adminHome');
    }

    public function dashboard(){
        if(Auth::user()->type=='Admin'){
            return view('backend.admin.index');
        }
        else{
            return view('backend.user.index');
        }
    }
}
