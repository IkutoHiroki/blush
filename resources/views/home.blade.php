@extends('layouts.app')

@section('content')
  <div class="container pt-5">
    @csrf
    <div class="row justify-content-center">
        <h1>投稿一覧</h1>
    </div>
  
    <div class="col-md-12 col-auto  pt-5">
      <ul class="nav nav-tabs nav-justified justify-content-center">
        <li class="nav-item text-dark">
            <a class="nav-link list-inline active" href="#msgs"
                data-toggle="tab" role="tab">新着順</a>
        </li>

        <li class="nav-item list-unstyled list-inline">
            <a class="nav-link" href="#frms"
                data-toggle="tab" role="tab">人気順</a>
        </li>

        <li class="nav-item list-unstyled list-inline">
            <a class="nav-link" href="#frms"
                data-toggle="tab" role="tab">おすすめ</a>
        </li>
      </ul>
  </div>
@endsection
