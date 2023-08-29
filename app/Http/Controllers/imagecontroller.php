<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class imagecontroller extends Controller
{
    public function upload(Request $request){

$image= $request->img;

$name= $image->getClientOriginalName();

$image->storeAs ('public/images',$name);

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




}
