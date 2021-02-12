<?php

namespace App\Http\Controllers;
use App\Models\Farzi;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function create(Request $request){
    	$contact = new Farzi;
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->save();
    	$contacts = Farzi::all();
    	return view('contacts',['contacts'=>$contacts,'request'=>$request]);
    }

    public function edit(Request $request){
    	
    }

    public function delete(Request $request){
    	
    }

    public function update(Request $request){
    	
    }


}
