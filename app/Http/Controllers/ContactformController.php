<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use App\Models\Registerform;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class ContactformController extends Controller
{


    // shows the user_contact_data table
    public function index()
    {
       return view('contactform');
    }

    // Storing input records of contact form-starts here

    public function contact_store(Request $request)
    {

        $validator=\Illuminate\Support\Facades\Validator::make($request->all(),[

            'first_name'=>'required|MAX:20',
            'last_name'=>'required|MAX:20',
            'company'=>'required|MAX:20',
            'email'=>'required|MAX:30|unique',
            'phone'=>'required|MAX:10|unique',
            'age'=>'required',
        ]);

        $input = $request->all();
        Contactform::create($input);
        return redirect('/contact')->with('contact_success_message', "Your contact data saved successfully");

    }
    //contact_store ends here

    //registration form view
    public function register_page_form()
    {
        return view('registration_form');
    }

    //method for storing register form records

    public function register_page_form_method(Request $request)
    {
      $validator=\Illuminate\Support\Facades\Validator::make($request->all(),[

          'first_name'=>'required|MAX:20',
          'last_name'=>'required|MAX:20',
          'company'=>'required|MAX:20',
          'email'=>'required|MAX:30',
          'phone'=> 'required|numeric|digits_between:1,10',
          'password'=>
              ['required|string|confirmed|',
                  Password::min(8)->letters()->numbers()->mixedCase()->symbols()
      ]
      ]);

        $register_user = new Registerform();
        $register_user->first_name = $request->input('first_name');
        $register_user->last_name = $request->input('last_name');
        $register_user->company = $request->input('company');
        $register_user->email = $request->input('email');
        $register_user->phone = $request->input('phone');
        $register_user->password =Hash::make($request->input('password'));

        $register_user->save();

        Auth::login($register_user);

        return redirect('/client-dashboard')->with('success-message',"Successfully registered");
}
//register form ends here



     public function login_page()

    {
        return view('login');
     }

     // Authenticating user credentials-login method

     public function authenticate(Request $request)
     {
       $request->validate([
           'email'=>'required',
           'password'=>'required'
       ]);

       $email=$request->input('email');
       $password=$request->input('password');

       //checking the email and password is existed or not

    if(Auth::attempt(['email'=>$email,'password'=>$password]))
    {
        //taking correspondent authenticated user

          $register_user = Registerform::where('email',$email)->first();
          Auth::login($register_user);


        //If the person is admin
          if($register_user->is_admin())
          {
              return redirect('/post');
          }
          else
          {
              return redirect('/client-dashboard');
          }

        }

       return back()->with('error_message',"invalid credentials");


}

   public function client_panel()
   {
      return view('Post.client_dashboard');
   }

   //logout function

     public function user_logout()
     {
        Auth::logout();
        return view('login');
     }

}
