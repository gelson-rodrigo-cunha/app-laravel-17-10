<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Client;
use App\User;
class UserController extends Controller
{
   /*     public function index()
    {
    	$total = Client::all()->count();
    	$clients = Client::all();
       // $clients = Client::where('user_id', Auth::user()-> id) -> get();
	
        return view('layouts.show-clients', compact('clients', 'total'));
        
    }
	*/
	      public function index()
    {

         
        return response()->json(
      
        User::select('id','name')->where('id', Auth::user()-> id) -> get()


        );
        
 //  return  User::select('id','name)->where('id', Auth::user()-> id) -> get();

//	 return  User::where('id', Auth::user()-> id) -> get();
    }
}