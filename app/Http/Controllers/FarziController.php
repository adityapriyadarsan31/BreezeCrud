<?php

namespace App\Http\Controllers;
use App\Models\Farzi;
use Illuminate\Http\Request;

class FarziController extends Controller
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

    public function edit(Request $request,$id){
    	$contact = Farzi::where('id',$id)->first();
    	$contacts = Farzi::all();
    	return view('contacts',['request'=>$request,'name'=>$contact->name,'email'=>$contact->email,'contacts'=>$contacts,'id'=>$id]);
    }

    public function delete(Request $request,$id){
    	Farzi::destroy($id);
    	$contacts = Farzi::all();
    	return view('contacts',['contacts'=>$contacts,'request'=>$request]);
    }

    public function update(Request $request){
    		$contact = Farzi::where('id',$request->id)->first();
	    	$contact->name = $request->name;
	    	$contact->email = $request->email;
	    	$contact->save();
	    $contacts = Farzi::all();
    	return view('contacts',['contacts'=>$contacts,'request'=>$request]);
    }

}
