<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\User;


class LoginController extends Controller
{
    public function login(Request $request)
    {
      $rules = array(
          'email'  => 'required|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i',
          'password' => 'required'
      );

      $validator = Validator::make($request->all(),$rules);
      if($validator->fails()){
          return Redirect::to('/')->withErrors($validator)->withInput($request->except('password'));
      }
      else{
          $userdata = array(
              'email'       => $request->get('email'),
              'password'    => $request->get('password')
          );
          if(Auth::attempt($userdata)){
              $user = User::where('Email', $request->get('email'))->first();
              if($user->isWorker()){
                  Session::put('key', $user->id);
                  Session::put('role', $user->role_id);
                  Session::put('name', $user->name);
                  return Redirect::to('/worker');
              }
              $user = Auth::user();
              Session::put('key', $user->email);
              Session::put('role', $user->role_id);
              return Redirect::to('/products');
          }
          else{
              return Redirect::to('/')->withErrors('Email or password is incorrect');
          }
      }
    }

    public function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
