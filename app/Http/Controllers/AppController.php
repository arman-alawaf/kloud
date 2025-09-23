<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class AppController extends Controller
{
    public function facebookPixel(){
        $data['app'] = App::latest()->first();
        return view('backend.admin.apps.facebookPixel', $data);
    }
    public function facebookPixelUpdate(Request $request){
        $data = App::latest()->first();
        $data->facebook_pixel = $request->facebook_pixel;                                                 
        $data->update();                                                 
        return redirect()->back()->with('success','Updated Successfully Done.');
    }
}
