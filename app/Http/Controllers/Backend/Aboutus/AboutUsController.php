<?php

namespace App\Http\Controllers\Backend\Aboutus;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $data = AboutUs::all();
        return view('backend.aboutus.aboutgiraffe.index', compact('data'));
    }

    // Call create view form
    public function create()
    {
        return view('backend.aboutus.aboutgiraffe.create');
    }

    //Adding Slider data to database Function
    public function store(Request $request)
    {
        $data = new AboutUs();

        if($request->hasFile('image')){
            $image = $request->image;
 
            $imagename=time().'.'.$image->getClientOriginalExtension();
     
            $request->image->move('backend/img/AboutUsImages',$imagename);
     
            $data->image=$imagename;
    
            $image = $request->image;
        }
        
        $data->title=$request->title;
        $data->link=$request->link;
        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with("message", "AboutUs Added Successfully");
    }

    // Edit view
    public function edit($id) 
    {
        $data = AboutUs::find($id);

        
        if (!$data) {
            return redirect('admin/about-us')->with('error', 'AboutUs not found');
        }

        return view('backend.aboutus.aboutgiraffe.edit', compact('data'));

        
    }


    //update AboutUs contents
    public function update(Request $request, $id)
    {
        $data = AboutUs::find($id);

        if (!$data) {
            return redirect('admin/about-us')->with('error', 'AboutUs not found');
        }
    
        // Handle image update
        if ($request->hasFile('image')) {
            // Delete the old slider image if it exists
            if ($data->image) {
                $oldImagePath = public_path('/backend/img/AboutUsImages/') . $data->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Upload the new slider image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/backend/img/AboutUsImages/'), $imageName);
                $data->image = $imageName;
            }
        }

    
        // Update other fields if necessary
        $data->link=$request->link;
        $data->title = $request->title;
        $data->description = $request->description;
        
        try {
            // Save the updated data
            $data->save();
            return redirect('admin/about-us')->with('message', 'AboutUs updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('admin/about-us')->with('error', 'Error updating a AboutUs');
        }

    }

    //Delete Slider content function 
    public function delete($id)
    {
        $data = AboutUs::find($id);
        $data->delete();
        return redirect()->back()->with("deletemessage", "AboutUs Contents Deleted Succesfully");
    }
}
