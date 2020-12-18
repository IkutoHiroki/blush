@extends('layouts.app')

@section('content')

  <div class="container">
  @csrf
    <div class="row">
    <ul class="nav nav-tabs" role="tablist">
    <!-- 1つ目のタブ -->
    <li class="nav-item">
        <a class="nav-link active" href="#msgs"
            data-toggle="tab" role="tab">Messages</a>
    </li>
    <!-- 2つ目のタブ -->
    <li class="nav-item">
        <a class="nav-link" href="#frms"
            data-toggle="tab" role="tab">Form</a>
    </li>
</ul>
    </div>
  </div>

@endsection
