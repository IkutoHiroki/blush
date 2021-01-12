@extends('layouts.app')

@section('content')

  <div class="container-fluid py-3">
    <h2>投稿する画像</h2>
    <form action="/post/store" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">

        <div class="col-md-6">
          <input type="file" id="image" name="image">
          <img id="img1" style="width:600px;height:600px;" />
        </div>

        <div class="col-md-6 pt-5">
          <label for="detail"><h2>コメントを記入する <span>(空白も可)</span></h2></label>
          <textarea class="form-control" id="detail" name="detail" rows="8"></textarea>
          <div class="pt-5">
            <button type="submit" class="btn  btn-secondary btn-lg btn-block border border-success">投稿する</button>
          </div>
        </div>
      </div>
    </form>
  </div>


@endsection