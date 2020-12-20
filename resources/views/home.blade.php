@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-3">
        @csrf
        <div class="row justify-content-center">
            <h1>投稿一覧</h1>
        </div>
  
        <div class="col-12 col-auto  py-5">
            <ul class="nav nav-tabs nav-justified justify-content-center">
                <li class="nav-item text-dark">
                    <a class="nav-link list-inline active h3" href="#msgs"
                    data-toggle="tab" role="tab">新着順</a>
                </li>

                <li class="nav-item list-unstyled list-inline">
                    <a class="nav-link h3" href="#frms"
                        data-toggle="tab" role="tab">人気順
                    </a>
                </li>

                <li class="nav-item list-unstyled list-inline">
                    <a class="nav-link h3" href="#frms"
                        data-toggle="tab" role="tab">おすすめ
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container pt-3">
        <div class="row  pb-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ユーザー名</h5>
                        <h6 class="card-subtitle text-right">日付</h6>
                    </div>
                    <img src="..." class="img-fluid" width="100%" height="400" alt="">
                </div>
                <div class="row text-right">
                    <div class="col">
                        <div>
                            <button type="button" class="btn btn-light"><i class="fas fa-caret-square-down fa-5x"></i></button>
                        </div>
                    </div>
                </div>
                <div class="border h3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, similique.
                </div>
                <div class="row text-right">
                    <div class="col">
                        <button type="button" class="btn btn-light"><i class="far fa-thumbs-up fa-4x"></i></button><smail class="h2">数字</smail>
                    </div>
                </div>
                <div class="row text-center border-bottom pt-2">
                    <div class="col">
                        <a href="#" class="stretched-link">問題のある画像を報告する</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ユーザー名</h5>
                        <h6 class="card-subtitle text-right">日付</h6>
                    </div>
                    <img src="..." class="img-fluid" width="100%" height="400" alt="">
                </div>
                <div class="row text-right">
                    <div class="col">
                        <div>
                            <button type="button" class="btn btn-light"><i class="fas fa-caret-square-down fa-5x"></i></button>
                        </div>
                    </div>
                </div>
                <div class="border h3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quae.
                </div>
                <div class="row text-right">
                    <div class="col">
                        <button type="button" class="btn btn-light"><i class="far fa-thumbs-up fa-4x"></i></button><smail class="h2">数字</smail>
                    </div>
                </div>
                <div class="row text-center border-bottom pt-2">
                    <div class="col">
                        <a href="#" class="stretched-link border-bottom">問題のある画像を報告する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2 bg-dark text-white">
        <div class="container">
            <div class="row justify-content-center">
                Copyright ©︎ 2020
            </div>
        </div>
    </div>


@endsection
