<?php

namespace App\Http\Controllers;
use App\Models\Name;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NameController extends Controller
{
    function name_info()
    {
        $name_info=Name::all();
        return view('admin.name',['name_info'=>$name_info]);
    }
    function person_name_info(Request $request)
    {
        $image = str_replace('', '-', str::lower($request->name)) . '-' . rand(1000000, 99999999);
        $upload_file = $request->image;
        $extension = $upload_file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $new_name = $image . "." . $extension;
        $img = $manager->read($upload_file);
        $img->tojpeg(200)->save(base_path('public/uploads/image/' . $new_name));
        Name::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $new_name,
            'created_at' => now(),

        ]);
        $notification = array(
            'message' => 'Person Information Insert Done Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
       
    }
    function edit_name_info($id)
    {
        $name_info=Name::find($id);
        return view('admin.edit_name',['name_info'=>$name_info]);
    }
    
    function person_name_info_update(Request $request)
    {
        $image = Name::find($request->id)->image;
        $delete_for_image = public_path('uploads/image/' . $image);
        unlink($delete_for_image);

        $image = str_replace('', '-', str::lower($request->name)) . '-' . rand(1000000, 99999999);
        $upload_file = $request->image;
        $extension = $upload_file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $new_name = $image . "." . $extension;
        $img = $manager->read($upload_file);
        $img->tojpeg(200)->save(base_path('public/uploads/image/' . $new_name));
        Name::find($request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $new_name,
            'created_at' => now(),

        ]);
        $notification = array(
            'message' => 'Person Information Update Done Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
       
    }
    function delete_name_info($id)
    {
        $image = Name::find($id)->image;
        $delete_for_image = public_path('uploads/image/' . $image);
        unlink($delete_for_image);
        Name::find($id)->delete();
        
        $notification = array(
            'message' => 'Person Information Delete Done Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
       
    }
    
}
