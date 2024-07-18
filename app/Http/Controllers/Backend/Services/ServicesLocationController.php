<?php

namespace App\Http\Controllers\Backend\Services;

use App\Http\Controllers\Controller;
use App\Models\ServicesLocation;
use Illuminate\Http\Request;

class ServicesLocationController extends Controller
{
    public function index()
    {
        $data = ServicesLocation::all();

        return view('backend.services.servicesLocation.index', compact('data'));
    }

    // Call create view form
    public function create()
    {
        return view('backend.services.services.create');
    }

    //Adding Slider data to database Function
    public function store(Request $request)
    {
        $data = new ServicesLocation;

        if($request->hasFile('image')){
            $image = $request->image;
 
            $imagename=time().'.'.$image->getClientOriginalExtension();
     
            $request->image->move('backend/img/ServicesLocationImages',$imagename);
     
            $data->image=$imagename;
    
            $image = $request->image;
        }
        $data->name=$request->name;
        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with("message", "Services Location Added Successfully");
    }

    // Edit view
    public function edit($id) 
    {
        $data = ServicesLocation::find($id);

        
        if (!$data) {
            return redirect('admin/ServicesLocation')->with('error', 'Location not found');
        }

        return view('backend.services.services.edit', compact('data'));

    }


    //update ServicesLocation contents
    public function update(Request $request, $id)
    {
        $data = ServicesLocation::find($id);

        if (!$data) {
            return redirect('admin/ServicesLocation')->with('error', 'Location not found');
        }
    
        // Handle image update
        if ($request->hasFile('image')) {
            // Delete the old slider image if it exists
            if ($data->image) {
                $oldImagePath = public_path('/backend/img/ServicesLocationImages/') . $data->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Upload the new slider image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/backend/img/ServicesLocationImages/'), $imageName);
                $data->image = $imageName;
            }
        }

    
        // Update other fields if necessary
        $data->name = $request->name;
        $data->description = $request->description;
        
        try {
            // Save the updated data
            $data->save();
            return redirect('admin/services-location')->with('message', 'Services Location updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('admin/services-location')->with('error', 'Error updating a ServicesLocation');
        }

    }

    //Delete Slider content function 
    public function delete($id)
    {
        $data = ServicesLocation::find($id);
        $data->delete();
        return redirect()->back()->with("deletemessage", "ServicesLocation Contents Deleted Succesfully");
    }
}
