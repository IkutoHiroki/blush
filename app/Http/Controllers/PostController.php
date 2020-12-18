<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function create(){
    return view('post/create');
  }

  public function store(Request $request){
    Post::create([
      'user_id'=> Auth::id(),
      'image'=> $request->image,
      'detail'=> $request->detail,
    ]);
    return redirect('/home');
  }

  public function edit($id){
    $ContributorID = Post::find($id);
    return view('post/edit' , compact('ContributorID'));
  }

  public function update(Request $request , $id){
    Post::where('id' , '=' , $id)->update([
      'user_id' => Auth::id(),
      'image' => $request->image,
      'detail' => $request->detail,
      ]);
    return redirect('/home');
  }

  public function delete(Request $request , $id){
    Post::where('id' , '=' , $id)->delete();
    return redirect('/home');
  }
}