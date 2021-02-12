<?php

namespace App\Http\Controllers;
use App\Models\Farzi;
use Illuminate\Http\Request;

class FarziController extends Controller
{
    //
    $editName;
    $editEmail;
    public function create(Request $request){
    	$contact = new Farzi;
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->save();
    	$contacts = Farzi::all();
    	return view('contacts',['contacts'=>$contacts,'request'=>$request]);
    }

    public function edit(Request $request){
    	$editName = $request->editName;
    	$editEmail = $request->editEmail;
    	return view('contacts',['request'=>$request,'name'=>$editName,'email'=>$email]);
    }

    public function delete(Request $request){
    	
    }

    public function update(Request $request){
    	
    }

}
