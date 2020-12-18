@extends('layouts.app')

@section('content')

<div class="container">
@csrf
  <div class="row">
  <div class="col-6">
  <form action="/post/store" method="post">
      <label for="content">投稿する画像を選択する</label>
      <textarea class="form-control" id="content" name="content" rows="6"></textarea>
    </div>

    <div class="col-6">
  <form action="/post/store" method="post">
      <label for="content">コメントを記入する <span>(空白も可)</span></label>
      <textarea class="form-control" id="content" name="content" rows="6"></textarea>
    </div>
    
    <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
  </form>
</div>
  
</div>


@endsection