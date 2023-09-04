<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;

class imagecontroller extends Controller
{
    public function upload(Request $request)
    {

        $image = $request->img;

        $name = time().$image->getClientOriginalName();



        $image->move(public_path("images/"), $name);

        $image_save = new Image();

        $image_save->name = $request->name;
        $image_save->contact = $request->contacts;
        $image_save->address = $request->adress;
        $image_save->email = $request->email;
        $image_save->price = $request->price;
        $image_save->length = $request->length;
        $image_save->details = $request->detail;

        $image_save->image = $name;

        $image_save->save();

        return back();




    }

    public function updateview($id)
    {
        $uuser = Image::find($id);
        return view('edit', compact("uuser"));
    }

    public function update(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->name;
        $user->password = $request->name;
        if($user->update()) {
            $image = $request->updateimg;

            $name = time().$image->getClientOriginalName();



            $image->move(public_path("images/"), $name);

            $image_save = new Image();

            $image_save->name = $request->updatename;
            $image_save->contacts = $request->updatecontacts;
            $image_save->address = $request->updateadress;
            $image_save->email = $request->updateemail;
            $image_save->price = $request->updateprice;
            $image_save->length = $request->updatelength;
            $image_save->details = $request->updatedetail;

            $image_save->image = $name;

            $image_save->update();
            return redirect('/admin');
        }









    }

    public function destroy($id){
        $image_save = Image::findOrFail($id);

        $image_save->delete();

return redirect()->back()->with('we' , 'succesfully deleted');

     }
}
