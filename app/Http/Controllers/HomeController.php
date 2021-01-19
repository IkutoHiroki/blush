<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Favorite;
use App\Blacklist;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $blacklist_obj = Blacklist::where('user_id' , Auth::id())->get();
        $blacklist = [];
        foreach($blacklist_obj as $black){
            array_push($blacklist , $black->post_id);
        }
        $order = $request->input('order');
        $order = isset($order) ? $order : 'new';
        $posts = [];
        // 人気順
        if($order == 'favorite'){
            $posts = Favorite::
                select(\DB::raw('count(*) as count, posts.id') , 'posts.*' , 'users.name' , 'posts.id as post_id')
                ->join('posts' , 'favorites.post_id' , 'posts.id')
                ->join('users' , 'posts.user_id' , 'users.id')
                ->groupBy('post_id')
                ->orderBy('count' , 'desc')
                ->whereNotIn('posts.id', $blacklist)
                ->paginate(10);
        }
        // 新着順
        if($order == 'new'){
            $posts = Post::
                select('posts.*' , 'users.name' , 'posts.id as post_id')
                ->join('users' , 'posts.user_id' , 'users.id')
                ->whereNotIn('posts.id', $blacklist)
                ->orderBy('posts.created_at' , 'desc')->paginate(10);
        }
        // おすすめ順
        if($order == 'recommend'){
            $before_month = new Carbon('-1 month');
            $posts = Favorite::
                select(\DB::raw('count(*) as count, posts.id') , 'posts.*' , 'users.name' , 'posts.id as post_id')
                ->join('posts' , 'favorites.post_id' , 'posts.id')
                ->join('users' , 'posts.user_id' , 'users.id')
                ->where('posts.created_at' , '>' , $before_month)
                ->whereNotIn('posts.id', $blacklist)
                ->groupBy('post_id')
                ->orderBy('count' , 'desc')
                ->paginate(10);
        }

        foreach($posts as $post){
            $post->favorite = Favorite::where('post_id' , $post->post_id)->count();
        }
        return view('/home',compact('posts' , 'order'));
    }
}
