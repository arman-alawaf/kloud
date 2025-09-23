<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{ 
    public function index(){
        $data['users'] = User::where('developer','!=','Yes')->latest()->get();
        return view('backend.admin.users.index', $data);
    }
    public function update(Request $request, $id){
        $data = User::find($id);                                              
        $data->type = $request->type;  
        $data->update();                                                 
        return redirect()->back()->with('success','Updated Successfully Done.');
    }
    public function destroy(Request $request, $id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done.');
    }
}
