@extends('layouts.app')

@section('content')


<div class="text-center">
  <p class="h1">マイページ</p>
</div>
  @csrf

<div class="container">
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
      </div>
  </div>
</div>
</div>

<div class="container pt-5">
<div class="row">
<div class="col-md-6 col-auto">
    <ul class="nav nav-tabs">
      <li class="nav-item">
      <a class="nav-link active" href="#msgs"
            data-toggle="tab" role="tab">今までの投稿一覧</a>
      </li>
      </div>

      <div class="col-md-6 col-auto">
      <li class="nav-item list-unstyled">
      <a class="nav-link" href="#frms"
            data-toggle="tab" role="tab"><i class="far fa-thumbs-up"></i>を押した一覧</a>
      </li>
    </ul>
    </div>
    </div>
</div>

@endsection