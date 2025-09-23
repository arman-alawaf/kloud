<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{     
    public function index(){
        $data['contacts'] = Contact::latest()->get();
        return view('backend.admin.contacts.index', $data);
    }
    public function store(Request $request){
        $data = new Contact;                                              
        $data->name = $request->name; 
        $data->email = $request->email; 
        $data->phone = $request->phone; 
        $data->message = $request->message; 
        $data->save();                                                 
        return redirect()->to('/')->with('success','Thanks "'.$request->name.'" for Contact Us.');
    }
    public function destroy(Request $request, $id){
        $data = Contact::find($id);
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done.');
    }
}
