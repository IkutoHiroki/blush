@extends('layouts.app')

@section('content')
<div class="container">
@csrf
    <div class="row justify-content-center">
    <h1>投稿一覧</h1>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
