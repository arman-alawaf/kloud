<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;         
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{  
    public function index(){
        $data['sliders'] = Slider::latest()->get();
        return view('backend.admin.sliders.index', $data);
    }
    
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|unique:sliders,title'
            ]);
    
            $data = new Slider;        
            $data->title = $request->title; 
            if($request->hasFile('image')) {
                $imageName = time().".".$request->file('image')->extension();
                $request->file('image')->move(public_path('images/sliders/'),$imageName);
                $data->image = $imageName;
            }  
            $data->save();
    
            return redirect()->back()->with('success', 'Added Successfully Done.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->with('error', $e->validator->errors()->first())
                ->withInput();
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|unique:sliders,title,' . $id
            ]);
    
            $data = Slider::findOrFail($id);
            $data->title = $request->title;
            if($request->hasFile('image')) {
                $destination = 'images/news/'.$data->image; if(File::exists($destination)){ File::delete($destination); }
                $imageName = time().".".$request->file('image')->extension();
                $request->file('image')->move(public_path('images/sliders/'),$imageName);
                $data->image = $imageName;
            }
            $data->save();
    
            return redirect()->back()->with('success', 'Updated Successfully Done.');
        } 
        catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->with('error', $e->validator->errors()->first())
                ->withInput();
        }
    }

    public function destroy(Request $request, $id){
        $data = Slider::findOrFail($id);
        $destination = 'images/sliders/'.$data->image; if(File::exists($destination)){ File::delete($destination); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done.');
    }
}
