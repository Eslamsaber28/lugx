<?php

namespace App\Http\Controllers;

use App\Model\mamber;
use Illuminate\Http\Request;

class MamberController extends Controller
{
    public function store(Request $request){
        mamber::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "surname"=> $request->surname,
            "massage"=> $request->massage,
        ]);
        return redirect()->route('conactus')->with("success",'create the comment successfuly');
    }
}
