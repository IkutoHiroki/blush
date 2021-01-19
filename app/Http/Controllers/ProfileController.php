<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\Blacklist;
use App\Favorite;
use Carbon\Carbon;

class ProfileController extends Controller
{

  public function index(Request $request)
  {
      $order = $request->input('order');
      $order = isset($order) ? $order : 'new';
      $posts = [];
      $user = Auth::user();
      $post_count = Post::where('posts.user_id' , $user->id)->count();
      $favorite_count = Favorite::
      join('posts' , 'favorites.post_id' , 'posts.id')->where('posts.user_id' , $user->id)->count();
 
      // ユーザー本人の今までの投稿一覧
      if($order == 'new'){
          $posts = Post::
              select('posts.*' , 'users.name' , 'posts.id as post_id')
              ->join('users' , 'posts.user_id' , 'users.id')
              ->where('posts.user_id' , $user->id)
              ->orderBy('posts.created_at' , 'desc')->paginate(10);
      }
      if($order == 'favorite'){
        $posts = Favorite::
            select('posts.*' , 'users.name' , 'posts.id as post_id')
            ->join('posts' , 'favorites.post_id' , 'posts.id')
            ->join('users' , 'posts.user_id' , 'users.id')
            ->where('favorites.user_id' , $user->id)
            ->orderBy('posts.created_at' , 'desc')
            ->paginate(10);
      }

      foreach($posts as $post){
          $post->favorite = Favorite::where('post_id' , $post->post_id)->count();
      }
      return view('profile/index',compact('posts' , 'order' ,'user' , 'post_count' , 'favorite_count'));
  }

  public function edit($id){
    $user = Auth::user();
    return view('profile/edit' , compact('user'));
  }


  public function update(Request $request){
    $id = Auth::id();
    User::where('id', '=' , $id)->update([
      'name' => $request->name,
      'profile' => $request->profile,
    ]);
    return redirect('/profile/'.$id);
  }
}

