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

        return view('backend.home.Testimonials.edit', compact('data'));
    }


    //update about us contents
    public function editTestimonials(Request $request, $id)
    {
        
        $data = Testimonials::find($id);

        $file = $request->file;

        if($file)
        {

        // Delete the old slider image if it exists
            $oldImagePath = public_path('backend/img/TestimonialsImages') . $data->image;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $imagename=time().'.'.$file->getClientOriginalExtension();

            $request->file->move('backend/img/TestimonialsImages',$imagename);

            $data->file=$imagename;
        }

        $data->title=$request->title;

        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with("message", "About Us Content Updated Successfully");


    }

    //Delete Slider content function 
    public function deleteTestimonials($id)
    {
        $data = Testimonials::find($id);
        $data->delete();
        return redirect()->back()->with("deletemessage", "Slider Contents Deleted Succesfully");
    }
}
