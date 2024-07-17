<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $data = Testimonials::all();
        return view('backend.home.testimonials.index', compact('data'));
    }

    // Call create view form
    public function create()
    {
        return view('backend.home.Testimonials.create');
    }

    //Adding Slider data to database Function
    public function store(Request $request)
    {
        $data = new Testimonials;

        if($request->hasFile('image')){
            $image = $request->image;
 
            $imagename=time().'.'.$image->getClientOriginalExtension();
     
            $request->image->move('backend/img/TestimonialsImages',$imagename);
     
            $data->image=$imagename;
    
            $image = $request->image;
        }
        $data->name=$request->name;
        $data->title=$request->title;
        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with("message", "Testimonial Added Successfully");
    }

    // Edit view
    public function edit($id) 
    {
        $data = Testimonials::find($id);

        
        if (!$data) {
            return redirect('admin-home/testimonials')->with('error', 'Testimonial member not found');
        }

        return view('backend.home.testimonials.edit', compact('data'));
    }


    //update Testimonials contents
    public function update(Request $request, $id)
    {
        $data = Testimonials::find($id);

        if (!$data) {
            return redirect('admin-home/testimonials')->with('error', 'Testimonial member not found');
        }
    
        // Handle image update
        if ($request->hasFile('image')) {
            // Delete the old slider image if it exists
            if ($data->image) {
                $oldImagePath = public_path('/backend/img/TestimonialsImages/') . $data->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Upload the new slider image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/backend/img/TestimonialsImages/'), $imageName);
                $data->image = $imageName;
            }
        }

    
        // Update other fields if necessary
        $data->name = $request->name;
        $data->title = $request->title;
        $data->description = $request->description;
        
        try {
            // Save the updated data
            $data->save();
            return redirect('admin-home/testimonials')->with('message', 'Testimonials updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('admin-home/testimonials')->with('error', 'Error updating a Testimonials');
        }

    }

    //Delete Slider content function 
    public function delete($id)
    {
        $data = Testimonials::find($id);
        $data->delete();
        return redirect()->back()->with("deletemessage", "Testimonial Contents Deleted Succesfully");
    }
}
