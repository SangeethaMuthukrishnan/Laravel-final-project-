<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use App\Models\Post;
use App\Models\Registerform;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{



    public function index()
    {
        $registers = Contactform::all();
        return view('Post.index', compact('registers'));
    }

    //contact form-edit

    public function edit_contact_form($id)
     {
        $registers= Contactform::find($id);
        return view('Post.edit_contact')->with('registers',$registers);
     }

     public function update_contact(Request $request,$id)
     {
        $registers = Contactform::find($id);
        $input = $request->all();
        $registers->update($input);
        return redirect('/post');
     }


    //contact form-delete the contact of the user

     public function destroy_user_contact($id)
     {
         Contactform::destroy($id);
         return redirect('/post');
     }

     //admin create-new user

     public function create_user_contact()
     {

         return view('Post.create_user_contact');
     }
     public function store_user_contacts(Request $request)
     {
          $input = $request->all();
          Contactform::create($input);
          return redirect('/post');
     }








}
