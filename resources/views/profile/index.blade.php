@extends('layouts.app')

@section('content')


<div class="text-center">
  <p class="h1">マイページ</p>
</div>

<div class="container">
  @csrf
  <div class="row">
    <div class="col-md-6 offset-md-3 pt-5">
      <p class="h2">{{$user->name}}</p>
      <div class="float-right">
        <a class="btn btn-outline-secondary btn-lg" href="/profile/edit">編集する</a>
      </div>
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
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-9 offset-md-1 pt-5">
      <p class="h4">自己紹介文</p>
        <div class="card-body border">
          {{$user->profile}}
        </div>
    </div>
  </div>
</div>

  <div class="container-fluid pt-3">
    <div class="row justify-content-center">
      <div class="col-12 col-auto  py-5">
        <ul class="nav nav-tabs nav-justified justify-content-center">
          <li class="nav-item text-dark">
            <a class="nav-link list-inline active h3" href="#msgs"
                data-toggle="tab" role="tab">今までの投稿一覧</a></a>
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
@endsection