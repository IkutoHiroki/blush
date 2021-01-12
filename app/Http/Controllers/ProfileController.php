<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\Blacklist;
use App\Favorite;

class ProfileController extends Controller
{
  public function index(Request $request){
    $user = Auth::user();
    return view('profile/index' , compact('user'));
  }
  public function edit(Request $request){
    $user = Auth::user();
    return view('profile/edit' , compact('user'));
  }


  public function update(Request $request){
    User::where('id', '=' , $id)->update([
      'user_id'=> Auth::id(),
      'name' => $request->name,
      'profile' => $request->profile,
    ]);
    return redirect('/profile');
  }
}

