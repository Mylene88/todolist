<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {   
      //  $user = Auth::user();
        return view('users.edit') ->  with('user', auth()->user());
    }

    public function update(Request $request)
    { 

        $this->validate($request, [
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
    session()->flash('success','User profile update successfully.');

    return redirect()->back();
    }

    public function index()
    {
        return view('changePassword');
    } 

    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password change successfully.');
    }
}
