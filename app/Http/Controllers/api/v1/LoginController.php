<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Bridge\AccessToken;

class LoginController extends Controller
{
 public function login(Request $request) {


   $login =$request->validate([
      'email' => 'required|string' ,
      'password' => 'required|string'
  ]);
   if(!Auth::attempt($login)){
      return response(['token' => '']);

  } 
  $accesToken = Auth::user()->createToken('authtoken')->accessToken;
   return response(['user' => Auth::user(), 'token'=> $accesToken]);

 }

}
