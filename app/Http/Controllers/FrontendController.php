<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class FrontendController extends Controller
{
    public function index(){
        $data['packages'] = Package::latest()->get();
        return view('frontend.index', $data);
    }
    public function package(){
        $data['BusinessPackages'] = Package::where('type','Business')->get();
        $data['ResidentialsPackages'] = Package::where('type','Residentials')->get();
        return view('frontend.package', $data);
    }
}
