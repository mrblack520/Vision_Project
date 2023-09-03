<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;

class imagecontroller extends Controller
{
    public function upload(Request $request){

$image= $request->img;

$name= time().$image->getClientOriginalName();



$image->move(public_path("images/"),$name);

$image_save = new Image;

$image_save->name=$request->name;
$image_save->contacts=$request->contacts;
$image_save->address=$request->adress;
$image_save->email=$request->email;
$image_save->price=$request->price;
$image_save->length=$request->length;
$image_save->details=$request->detail;

$image_save->image =$name;

$image_save->save();

return back();




    }

    public function update(Request $request){
//         $image= $request->img;

// $name= time().$image->getClientOriginalName();



// $image->move(public_path("images/"),$name);

// $image_save = new Image;

//         $image_save->name=$request->updatename;
//         $image_save->name=$request->updatecontacts;
//         $image_save->name=$request->updateadress;
//         $image_save->name=$request->updateemail;
//         $image_save->name=$request->updateprice;
//         $image_save->name=$request->updatelength;
//         $image_save->name=$request->updatedetail;

//         $image_save->image =$name;

// $image_save->update();

// return back();
return view('edit');
    }

public function destroy(string $id){

$image_save = Image::findorFail($id);
$image_save->delete();

return back();


}




}
