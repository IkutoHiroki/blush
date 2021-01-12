<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Favorite;
use Storage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  public function create(){
    return view('post/create');
  }

  public function store(Request $request){
    //s3アップロード開始
    $image = $request->file('image');
    // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('images', $image, 'public');
    // アップロードした画像のフルパスを取得
    $image_path = Storage::disk('s3')->url($path);

    Post::create([
      'user_id'=> Auth::id(),
      'image'=> $image_path,
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

  public function favorite(Request $request , $id){
    $favorite = Favorite::where('user_id' , Auth::id())->where('post_id' , $id)->first();
    if(isset($favorite)){
      $favorite->delete();
    }else{
      Favorite::create([
        'user_id'=> Auth::id(),
        'post_id'=> $id,
      ]);
    }
    return redirect('/home');
  }
}

  