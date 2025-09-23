<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Order;

class PackageController extends Controller
{     
    public function index(){
        $data['packages'] = Package::latest()->get();
        // $data['packages'] = Package::latest()->whereNull('deleted_at')->get();
        return view('backend.admin.packages.index', $data);
    }
    public function store(Request $request){
        $data = new Package;  
        $data->created_by = auth()->id();                                             
        $data->type = $request->type; 
        $data->plan = $request->plan; 
        $data->name = $request->name; 
        $data->price = $request->price; 
        $data->feature = $request->feature; 
        $data->save();                                                 
        return redirect()->back()->with('success','Added Successfully Done.');
    }
    public function update(Request $request, $id){
        $data = Package::findOrFail($id); 
        $data->updated_by = auth()->id();                                               
        $data->type = $request->type; 
        $data->plan = $request->plan; 
        $data->name = $request->name; 
        $data->price = $request->price; 
        $data->feature = $request->feature; 
        $data->update();                                                 
        return redirect()->back()->with('success','Updated Successfully Done.');
    }
    public function destroy(Request $request, $id){
        $data = Package::findOrFail($id);
        
        $orders = Order::where('package_id',$id)->get();
        foreach($orders as $order){ $order->delete(); }
        
        $data->deleted_by = auth()->id();
        $data->save();
        
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done.');
    }
    public function trashList(){
        if (auth()->user()->developer !== 'Yes') {
            // abort(403, 'Unauthorized access.');
            return view('errors.check-permission');
        }
        $data['packages'] = Package::onlyTrashed()->get();
        return view('backend.admin.packages.trashList', $data);
    }
    public function restore($id){
        $data = Package::withTrashed()->find($id);
        $data->restore();
        return back()->with('success','Restored Successfully Done.');
    }
    public function delete($id){
        $data = Package::withTrashed()->find($id);
        $data->forceDelete();
        return back()->with('error','Deleted Successfully Done.');
    }
}
