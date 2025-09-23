<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;         
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{  
    public function index(){
        $data['news'] = News::latest()->get();
        return view('backend.admin.news.index', $data);
    }
    
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|unique:news,title'
            ]);
    
            $data = new News;        
            $data->title = $request->title; 
            $data->slug = \Illuminate\Support\Str::slug($request->title);
            if($request->hasFile('image')) {
                $imageName = time().".".$request->file('image')->extension();
                $request->file('image')->move(public_path('images/news/'),$imageName);
                $data->image = $imageName;
            }  
            $data->description = $request->description;
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
                'title' => 'required|unique:news,title,' . $id
            ]);
    
            $data = News::findOrFail($id);
            $data->title = $request->title;
            $data->slug = \Illuminate\Support\Str::slug($request->title);
            if($request->hasFile('image')) {
                $destination = 'images/news/'.$data->image; if(File::exists($destination)){ File::delete($destination); }
                $imageName = time().".".$request->file('image')->extension();
                $request->file('image')->move(public_path('images/news/'),$imageName);
                $data->image = $imageName;
            }
            $data->description = $request->description;
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
        $data = News::findOrFail($id);
        $destination = 'images/news/'.$data->image; if(File::exists($destination)){ File::delete($destination); }
        $data->delete();
        return redirect()->back()->with('error','Deleted Successfully Done.');
    }
}
