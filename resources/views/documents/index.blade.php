@extends('app') {{-- app.blade.php をベースに使うことを宣言 --}}

@section('title', '文書一覧') {{-- app.blade.php の @yirld('title') に対応 --}}

@section('content')
@include('navbar')
<br>
<div class="container">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
        aria-selected="true">一覧</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
        aria-selected="false">保有期限</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      {{--@foreach($documents as $document)--}}
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
          <div>
            <div class="font-weight-bold">
              タイトル
            </div>
            <div class="font-weight-lighter">
              2020/2/1 12:00
            </div>
            <i class="fas fa-user-circle fa-3x mr-1"></i>
          </div>
        </div>
        <div class="card-body pt-0 pb-2">
          <h3 class="h4 card-title">
            お気に入り
          </h3>
          <div class="card-text">
            記事本文
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      保有期限の中身
    </div>
  </div>
{{--@endforeach--}}
</div>
@endsection