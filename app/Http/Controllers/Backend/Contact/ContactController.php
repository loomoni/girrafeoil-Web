<?php

namespace App\Http\Controllers\Backend\Contact;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = contact::all();
        return view('backend.contact.index', compact('data'));
    }

    // Call create view form
    public function create()
    {
        return view('backend.contact.create');
    }

    //Adding Slider data to database Function
    public function store(Request $request)
    {
        $data = new contact;

        $data->address=$request->address;
        $data->phone=$request->phone;
        $data->email=$request->email;

        $data->save();

        return redirect()->back()->with("message", "Contact Added Successfully");
    }

    // Edit view
    public function edit($id) 
    {
        $data = contact::find($id);

        
        if (!$data) {
            return redirect('admin/contact')->with('error', 'contact not found');
        }

        return view('backend.contact.edit', compact('data'));

    }


    //update contact contents
    public function update(Request $request, $id)
    {
        $data = contact::find($id);

        if (!$data) {
            return redirect('admin/contact')->with('error', 'contact not found');
        }
    
        // Update other fields if necessary
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        
        try {
            // Save the updated data
            $data->save();
            return redirect('admin/contact')->with('message', 'contact updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('admin/contact')->with('error', 'Error updating a contact');
        }

    }

    //Delete Slider content function 
    public function delete($id)
    {
        $data = contact::find($id);
        $data->delete();
        return redirect()->back()->with("deletemessage", "contact Contents Deleted Succesfully");
    }
}
