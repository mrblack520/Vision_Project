<?php

namespace App\Http\Controllers;


use App\Models\Image;
use Illuminate\Http\Request;

class imagecontroller extends Controller
{
    public function upload(Request $request)
    {
// $request->validate([
// 'name' =>'req'


// ]);




        $image = $request->img;

        $name = time().$image->getClientOriginalName();



        $image->move(public_path("images/"), $name);

        $image_save = new Image();

        $image_save->name = $request->name;
        $image_save->contacts = $request->contacts;
        $image_save->address = $request->adress;
        $image_save->email = $request->email;
        $image_save->price = $request->price;
        $image_save->length = $request->length;
        $image_save->details = $request->detail;
        $image_save->image = $name;

        $image_save->save();

        return back();




    }
    	public function update($id){
      $image_save = Image::find($id);
      return view("update" , compact("image_save"));
}
public function edit($id, Request $request){

    $image = $request->img;

    $name = time().$image->getClientOriginalName();



    $image->move(public_path("images/"), $name);

    $image_save = new Image();

    $image_save = Image::find($id);
    $image_save->name = $request->name;
        $image_save->contact = $request->contacts;
        $image_save->address = $request->adress;
        $image_save->email = $request->email;
        $image_save->price = $request->price;
        $image_save->length = $request->length;
        $image_save->image = $name;

        $image_save->details = $request->detail;

    $image_save->update();

    $image_save = Image::all();
    //    return view("Admin"  ,compact('image_save'));

    return redirect()->intended("/admin");


    }



    public function destroy(string $id){

        $image_save = Image::findOrFail($id);

        $image_save->delete();

return redirect()->back()->with('we' , 'succesfully deleted');

     }
}
