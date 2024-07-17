<?php

namespace App\Http\Controllers\Backend\Aboutus;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::all();
        return view('backend.aboutus.team.index', compact('data'));
    }

    // Call create view form
    public function create()
    {
        return view('backend.aboutus.team.create');
    }

    //Adding Slider data to database Function
    public function store(Request $request)
    {
        $data = new Team;

        if($request->hasFile('image')){
            $image = $request->image;
 
            $imagename=time().'.'.$image->getClientOriginalExtension();
     
            $request->image->move('backend/img/TeamImages',$imagename);
     
            $data->image=$imagename;
    
            $image = $request->image;
        }
        $data->name=$request->name;
        $data->title=$request->title;
        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with("message", "Team Member Added Successfully");
    }

    // Edit view
    public function edit($id) 
    {
        $data = Team::find($id);

        
        if (!$data) {
            return redirect('admin/Team')->with('error', 'Team member not found');
        }

        return view('backend.aboutus.team.edit', compact('data'));

    }


    //update Team contents
    public function update(Request $request, $id)
    {
        $data = Team::find($id);

        if (!$data) {
            return redirect('admin/Team')->with('error', 'Team member not found');
        }
    
        // Handle image update
        if ($request->hasFile('image')) {
            // Delete the old slider image if it exists
            if ($data->image) {
                $oldImagePath = public_path('/backend/img/TeamImages/') . $data->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Upload the new slider image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/backend/img/TeamImages/'), $imageName);
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
            return redirect('admin/team')->with('message', 'Team updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('admin/team')->with('error', 'Error updating a Team');
        }

    }

    //Delete Slider content function 
    public function delete($id)
    {
        $data = Team::find($id);
        $data->delete();
        return redirect()->back()->with("deletemessage", "Team Contents Deleted Succesfully");
    }
}
