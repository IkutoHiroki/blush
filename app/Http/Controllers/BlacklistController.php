<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Blacklist;

class BlacklistController extends Controller
{
  public function store(Request $request , $id){
      Blacklist::create([
        'user_id'=> Auth::id(),
        'post_id'=> $id,
      ]);
  return redirect('/home');
  }
}