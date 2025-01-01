<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentModel;

class studentController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    
    public function create(Request $request){
        dd($request->all());
        // $image = time().'.'.$request->image->extension();
        // $create = new studentModel();
        // $create->name = $request['name'];
        // $create->email = $request['email'];
        // $create->image = $image['image'];
    }
}
