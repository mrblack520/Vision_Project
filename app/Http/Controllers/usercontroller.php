<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class usercontroller extends Controller
{
    public function index(){

        return view("index");

    }
    public function dash()
    {
        $user = Auth::user(); // Retrieve the authenticated user

        return view('Dashboard', ['user' => $user]);
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

public function sign_up(){

return view('sign-up');

}

public function sign_up_logic(Request $request){

    $user = new User;

    $user->name=$request->name;
    $user->email=$request->email;
    $user->role=0;
    $user->password=$request->password;
    $user->save();

return view ('sign-in');
}

public function sign_in(){

    return view('sign-in');

    }
    public function modal(){

        return view("1/modal1");

    }
    public function modal2(){

        return view("1/modal2");

    }
    public function modal3(){

        return view("1/modal3");

    }
    public function modal4(){

        return view("1/modal4");

    }
    public function modal5(){

        return view("1/modal5");

    }
    public function modal6(){

        return view("1/modal6");

    }
    public function modal7(){

        return view("1/modal7");

    }
    public function modal8(){

        return view("1/modal8");

    }
    public function modal9(){

        return view("1/modal9");

    }
    public function modal10(){

        return view("1/modal10");

    }
    public function modal11(){

        return view("1/modal11");

    }
    public function modal12(){

        return view("1/modal12");

    }
    public function modal13(){

        return view("1/modal13");

    }
    public function modal14(){

        return view("1/modal14");

    }
    public function modal15(){

        return view("1/modal15");

    }
    public function modal16(){

        return view("1/modal16");

    }
    public function modal17(){

        return view("1/modal17");

    }
    public function modal18(){

        return view("1/modal18");

    }
    public function modal19(){

        return view("1/modal19");

    }
    public function modal20(){

        return view("1/modal20");

    }
    public function modal21(){

        return view("1/modal21");

    }
    public function report(){

        return view("reports");

    }
    public function clients(){

        return view("clients");

    }
    public function userProfile(){

        return view("userProfile");

    }

    public function sign_in_logic(Request $request){

        $data = $request->validate([
'email' => 'required|email',
'password' =>   'required|string'

        ]);


$user = User::where('email' , $data['email'])->first();

if($user && Hash::check($data['password'] , $user->password)){

Auth::login($user);
if(Auth::user()->role== 1){
return redirect()->intended("/admin");

}else{

return redirect()->intended("/dash");
}

}else{

return redirect()->back();
}

    }
    public function admin_panel(){

        return view('Admin');

                }
                public function dashboard(){

                    return view('Dashboard');

                            }


      public function logout(){


Session::flush();
Auth::logout();
return redirect('/signin');


      }

}
