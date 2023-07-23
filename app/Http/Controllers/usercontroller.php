<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class usercontroller extends Controller
{
    public function index(){

        return view("index");

    }
 public function index2(){

        return view("index-2");
        
    }

    public function contact(){

        return view("contact");
        
    }

    public function about(){

        return view("about");
        
    }

    public function blog(){

        return view("blog");
        
    }
    public function project(){

        return view("project");
        
    }
    public function service(){

        return view("service");
        
    }
    public function service_det(){

        return view("service-details");
        
    }
     public function service_det_2(){

        return view("service-details-2");
        
    }

    public function service_det_3(){

        return view("service-details-3");
        
    }
     public function service_det_4(){

        return view("service-details-4");
        
    }
    public function testimonial(){

        return view("testimonial");
        
    }
    
    public function coming(){

        return view("coming-soon");
        
    }

public function sign_up_in(){

return view('sign-up-in');

}

public function sign_up_logic(Request $req){

$user = new User;

$user->name=$req->name;
$user->email=$req->email;
$user->role=0;
$user->password=$req->password;

$user->save();

return ('data send');
}

}
