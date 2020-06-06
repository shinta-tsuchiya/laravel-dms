@extends('app') {{-- app.blade.php をベースに使うことを宣言 --}}

@section('title', '文書一覧') {{-- app.blade.php の @yirld('title') に対応 --}}

@include('navbar')

@section('content')

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
      @foreach($documents as $document)
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
          <div>
            <div class="font-weight-bold">
              {{ $document->title }}
            </div>
            <div class="font-weight-lighter">
              <i class="fa fa-user mr-1"></i>
              {{ $document->updated_at->format('Y/m/d H:i') }}
            </div>
            <div class="card-text">
              お気に入り数
            </div>  
          </div>
        </div>
        <div class="card-body pt-0 pb-2">
          <h3 class="h4 card-title">
            {{ $document->body }}
          </h3>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      保有期限の中身
    </div>
  </div>
@endforeach
</div>
@endsection