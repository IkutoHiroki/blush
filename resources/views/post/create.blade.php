@extends('layouts.app')

@section('content')

  <div class="container-fluid py-3">
    <h2>投稿する画像を選択する</h2>
    @csrf
    <div class="row">
      <div class="col-md-6 border"  style="padding:300px;">
      <form action="/post/store" method="post">
          <img src="..." class="img-fluid" width="100%" height="400" alt="">
      </div>

      <div class="col-md-6 pt-5">
        <label for="content"><h2>コメントを記入する <span>(空白も可)</span></h2></label>
        <textarea class="form-control" id="content" name="content" rows="8"></textarea>
        <div class="pt-5">
          <button type="submit" class="btn  btn-secondary btn-lg btn-block">投稿する</button>
        </div>
      </div>
      </form>
    </div>
  </div>


@endsection