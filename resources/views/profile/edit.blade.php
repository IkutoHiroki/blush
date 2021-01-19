@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-9">
        <form action="/profile/update/{{$user->id}}" method="post">
        @csrf
          <div class="form-group col-sm-7 pt-5">
            <label for="name">ニックネーム</label>
            <input type="name" class="form-control" id="name" name="name" value="{{$user->name}}">
          </div>
          <div class="form-group p-3">
            <label for="profile">自己紹介文 <span>(500文字以内)</span></label>
            <textarea class="form-control" rows="10" id="profile" name="profile">{{$user->profile}}</textarea>
          </div>
          <div class="pt-4">
            <input type="submit" value="編集を完了する"class="btn btn-outline-secondary btn-block btn-lg"/>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection