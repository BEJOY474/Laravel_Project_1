<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use PhpParser\Builder\Function_;

class FirstController extends Controller
{
    //__index method__
   function index()  {
       // dd(app());

       return view('contact');
   }

   function indexAbout()  {
    // dd(app());

    return view('about');
}

function aboutUiu()  {
    // dd(app());

    return view('uiu');
}

function faculty()  {
    // dd(app());

    return view('faculty');
}

public function game(){
    abort(404);
}

//student__store request
// public function studentStore(Request $request){
//     // dd($request->all());
//     //    dd($request->path());
//      //dd($request->url());
//        dd($request->ip());
// }

//responce
// public function studentStore(Request $request){
//    $data = array();
//    $data['name'] = $request->name;
//    $data['email'] = $request->email;
//    $data['phone'] = $request->phone;

//    //return redirect('/');
// // return redirect()->route('about.us');
//  return redirect()->back()->with('success', 'Student Inserted!');
// }

public function laravel(Request $request){
   // return view('laravel');

   if (view()->exists('laravel'))
   {
    return View::make('laravel', ['name' => 'James']);
   }else{
        return "Not Found";
   }
    
   
 }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:55',
                 'email'=> 'required|max:255',
            'password' => 'required|min:6|max:15',
        ]);

      //  dd($request->all());
      \Log::channel('contactStore')->info('the contact form submited by'.rand(1,20));
      return redirect()->back();
    }


}
