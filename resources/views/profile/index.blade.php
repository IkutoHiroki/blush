@extends('layouts.app')

@section('content')


  <div class="text-center pb-5">
    <p class="h1">マイページ</p>
  </div>

  <div class="container">
    @csrf
    <div class="row">
      <div class="col d-flex justify-content-around">
        <p class="h2">{{$user->name}}</p>
        <a class="btn btn-outline-secondary btn-lg" href="/profile/edit">編集する</a>
      </div>
    </div>
  </div>

  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-4">
        <p>##</p>
        <p>投稿数</p>
      </div>
      <div class="col-4">
        <p>##</p>
        <i class="far fa-thumbs-up"></i>が押された数
      </div>
      <div class="col-md-9 offset-md-1 pt-5">
        <p class="h4">自己紹介文</p>
          <div class="border h-100">
            {{$user->profile}}
          </div>
      </div>
    </div>
  </div>

          <!-- タブの一覧 -->
  <div class="container-fluid pt-3">
    <div class="row">
      <div class="col-12 col-auto py-5">
        <ul class="nav nav-tabs nav-justified nav-pills justify-content-center border-dark">
          <li class="nav-item text-dark">
            <a class="nav-link list-inline active h3" href="#msgs"
                data-toggle="tab" role="tab">今までの投稿一覧
            </a>
          </li>
          <li class="nav-item list-unstyled list-inline">
            <a class="nav-link h3" href="#frms"
                data-toggle="tab" role="tab"><i class="far fa-thumbs-up"></i>を押した投稿一覧
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>


      <!--  投稿内容を表示 1つ目  -->
  <div class="container">
    <div class="row">
      <div class="col-6 pb-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">ユーザー名</h5>
            <h6 class="card-subtitle text-right">日付</h6>
          </div>
            <img src="..." class="img-fluid" width="100%" height="400" alt="">
          </div>
          <div class="row text-right">
            <div class="col">
              <button type="button" class="btn btn-light"><i class="fas fa-caret-square-down fa-5x"></i></button>
            </div>
          </div>

          <!-- コメントの表示 -->
          <div class="border h3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, similique.
          </div>
          <div class="row text-right">
            <div class="col">
              <button type="button" class="btn btn-light"><i class="far fa-thumbs-up fa-4x"></i></button><smail class="h2">数字</smail>
            </div>
          </div>

              <!-- ブラックリスト関係 -->
          <div class="row text-center pt-2">
            <div class="col">
              <a href="#" class="stretched-link">問題のある画像を報告する</a>
            </div>
          </div>

           <!-- 編集ボタン・削除ボタン -->
          <div class="row justify-content-around border-bottom pt-2">
            <div class="col">
              <a class="btn btn-success btn-lg" href="/post/update">編集する</a>
            </div>
            <div class="col">
              <a class="btn btn-danger btn-lg" href="/post/detele">削除する</a>
            </div>
          </div>
        </div>
      </div>

      <!--  投稿内容を表示 2つ目  -->
      <div class="col-md-6 pb-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">ユーザー名</h5>
            <h6 class="card-subtitle text-right">日付</h6>
          </div>
            <img src="..." class="img-fluid" width="100%" height="400" alt="">
          </div>
          <div class="row text-right">
            <div class="col">
              <button type="button" class="btn btn-light"><i class="fas fa-caret-square-down fa-5x"></i></button>
            </div>
          </div>

          <!-- コメントの表示 -->
          <div class="border h3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, similique.
          </div>
          <div class="row text-right">
            <div class="col">
              <button type="button" class="btn btn-light"><i class="far fa-thumbs-up fa-4x"></i></button><smail class="h2">数字</smail>
            </div>
          </div>

              <!-- ブラックリスト関係 -->
          <div class="row text-center pt-2">
            <div class="col">
              <a href="#" class="stretched-link">問題のある画像を報告する</a>
            </div>
          </div>

            <!-- 編集ボタン・削除ボタン -->
          <div class="row justify-content-around border-bottom pt-2">
            <div class="col-2">
              <a class="btn btn-success btn-lg" href="/post/update">編集する</a>
            </div>
            <div class="col-2">
              <a class="btn btn-danger btn-lg" href="/post/detele">削除する</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

              <!--  ページネーション -->
  <div class="container-fluid pt-5">
      <div class="row">
          <div class="col-12 col-auto">
              <nav aria-label="Page Navigation">
                  <ul class="pagination pagination-lg justify-content-center">
                      <li class="page-item">
                          <a  class="page-link" href="#" aria-label="Previous Page">
                              <span aria-hidden="true">&laquo;</span>
                          </a>
                      </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">4</a></li>
                              <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                          <a href="#" class="page-link" aria-label="Next Page">
                              <span aria-hidden="true">&raquo;</span>
                          </a>
                      </li>
                  </ul>
              </nav>
          </div>
      </div>
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