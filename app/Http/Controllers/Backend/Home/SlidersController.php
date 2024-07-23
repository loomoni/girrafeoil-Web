<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\Sliders;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function index()
    {
        $data = Sliders::all();
        return view('backend.home.sliders.sliders', compact('data'));
    }

    // Call create view form
    public function create()
    {
        return view('backend.home.sliders.create');
    }

    //Adding Slider data to database Function
    public function store(Request $request)
    {
        $data = new Sliders;

        if($request->hasFile('file')){
            $file = $request->file;
 
            $imagename=time().'.'.$file->getClientOriginalExtension();
     
            $request->file->move('backend/img/slidersImages',$imagename);
     
            $data->file=$imagename;
    
            $file = $request->file;
        }
        $data->title=$request->title;
        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with("message", "Slider Added Successfully");
    }

    // Edit view
    public function edit($id) 
    {
        $data = Sliders::find($id);

        return view('backend.home.sliders.edit', compact('data'));
    }


    //update about us contents
    public function update(Request $request, $id)
    {
        $data = Sliders::find($id);

        if (!$data) {
            return redirect('admin/sliders')->with('error', 'Slider not found');
        }
    
        // Handle image update
        if ($request->hasFile('file')) {
            // Delete the old slider image if it exists
            if ($data->file) {
                $oldImagePath = public_path('/backend/img/slidersImages/') . $data->file;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Upload the new slider image
            if ($request->hasFile('file')) {
                $image = $request->file('file');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/backend/img/slidersImages/'), $imageName);
                $data->file = $imageName;
            }
        }

    
        // Update other fields if necessary
        $data->title = $request->title;
        $data->description = $request->description;
        
        try {
            // Save the updated data
            $data->save();
            return redirect('admin/sliders')->with('message', 'sliders updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('admin/sliders')->with('error', 'Error updating a sliders');
        }

    }

    //Delete Slider content function 
    public function deletesliders($id)
    {
        $data = Sliders::find($id);
        $data->delete();
        return redirect()->back()->with("deletemessage", "Slider Contents Deleted Succesfully");
    }
        

}
