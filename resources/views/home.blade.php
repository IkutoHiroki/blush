@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-3">
        @csrf
        <div class="row justify-content-center">
            <h1>投稿一覧</h1>
                <!-- タブの一覧 -->
            <div class="col-12 col-auto py-5">
                <ul class="nav nav-tabs nav-justified nav-pills justify-content-center border-dark">
                    <li class="nav-item text-dark">
                        <a class="nav-link list-inline h3 {{$order == 'new' ? 'active' : ''}}" href="/home"
                            >新着順
                        </a>
                    </li>

                    <li class="nav-item list-unstyled list-inline">
                        <a class="nav-link h3 {{$order == 'favorite' ? 'active' : ''}}" href="/home?order=favorite"
                            >人気順
                        </a>
                    </li>

                    <li class="nav-item list-unstyled list-inline {{$order == 'recommend' ? 'active' : ''}}">
                        <a class="nav-link h3 {{$order == 'recommend' ? 'active' : ''}}" href="/home?order=recommend"
                            >おすすめ
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--  投稿内容を表示 1つ目 -->
    <div class="container py-3">
        <div class="row">
        @foreach($posts as $post)
            <div class="col-md-6 pb-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->name}}</h5>
                        <h6 class="card-subtitle text-right">{{$post->created_at}}</h6>
                    </div>
                        <img src="{{$post->image}}" class="img-fluid" width="100%" height="400" alt="">
                </div>

                <!-- コメントの表示 -->
                <div class="text-right">
                    <button type="button" class="btn btn-light" onclick="clickComment(event)"><i class="fas fa-caret-square-up fa-5x"></i></button>
                    <div class="border comment text-left h3 d-none">
                        {{$post->detail}}
                    </div>
                </div>
                
                <div class="row text-right">
                    <div class="col">
                        <a href="/post/favorite/{{$post->post_id}}" class="btn btn-light"><i class="far fa-thumbs-up fa-4x"></i></a><smail class="h2">{{$post->favorite}}</smail>
                    </div>
                </div>

                <!-- ブラックリスト関係 -->
                <div class="row text-center border-bottom pt-2">
                    <div class="col">
                        <a href="/blacklist/store/{{$post->post_id}}" class="stretched-link">問題のある画像を報告する</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

                <!--  ページネーション -->
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

        <!-- フッター部分 -->
    <div class="py-2 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                Copyright ©︎ 2020
            </div>
        </div>
    </div>


@endsection
