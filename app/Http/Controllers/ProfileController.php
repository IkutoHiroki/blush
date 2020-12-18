<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Profile;

class ProfileController extends Controller
{
  public function index(Request $request){
    $user = Auth::user();
    return view('profile/index' , compact('user'));
  }
  public function edit(Request $request , $id){
    $user = Auth::user();
    return view('profile/edit' , compact('user'));
  }


  public function update(Request $request , $id){
    Profile::where('id', '=' , $id)->update([
      'user_id'=> Auth::id(),
      'name' => $request->name,
      'profile' => $request->profile,
    ]);
    return redirect('/profile');
  }
}

