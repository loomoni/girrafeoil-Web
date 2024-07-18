<?php

namespace App\Http\Controllers\Backend\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $data = News::all();

        return view('backend.news.index', compact('data'));
    }

    // Call create view form
    public function create()
    {
        return view('backend.news.create');
    }

    //Adding Slider data to database Function
    public function store(Request $request)
    {
        $data = new News;

        if($request->hasFile('image')){
            $image = $request->image;
 
            $imagename=time().'.'.$image->getClientOriginalExtension();
     
            $request->image->move('backend/img/NewsImages',$imagename);
     
            $data->image=$imagename;
    
            $image = $request->image;
        }
        $data->date=$request->date;
        $data->title=$request->title;
        $data->description=$request->description;

        $data->save();

        return redirect()->back()->with("message", "News Added Successfully");
    }

    // Edit view
    public function edit($id) 
    {
        $data = News::find($id);

        
        if (!$data) {
            return redirect('admin/news')->with('error', 'News member not found');
        }

        return view('backend.news.edit', compact('data'));

    }


    //update News contents
    public function update(Request $request, $id)
    {
        $data = News::find($id);

        if (!$data) {
            return redirect('admin/news')->with('error', 'News not found');
        }
    
        // Handle image update
        if ($request->hasFile('image')) {
            // Delete the old slider image if it exists
            if ($data->image) {
                $oldImagePath = public_path('/backend/img/NewsImages/') . $data->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Upload the new slider image
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();        
                $image->move(public_path('/backend/img/NewsImages/'), $imageName);
                $data->image = $imageName;
            }
        }

    
        // Update other fields if necessary
        $data->date = $request->date;
        $data->title = $request->title;
        $data->description = $request->description;
        
        try {
            // Save the updated data
            $data->save();
            return redirect('admin/news')->with('message', 'News updated successfully');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return redirect('admin/news')->with('error', 'Error updating a News');
        }

    }

    //Delete Slider content function 
    public function delete($id)
    {
        $data = News::find($id);
        $data->delete();
        return redirect()->back()->with("deletemessage", "News Contents Deleted Succesfully");
    }
}
