@extends('app') {{-- app.blade.php をベースに使うことを宣言 --}}

@section('title', '新規作成') {{-- app.blade.php の @yirld('title') に対応 --}}

@include('navbar')

@section('content')
<div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card mt-3">
            <div class="card-body pt-0">
              @include('error_card_list')
              <div class="card-text">
                <form method="POST" action="{{ route('documents.store') }}">
                @include('documents.form')
                <button type="submit" class="btn btn-block btn-primary mt-2 md-2">投稿する</button>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection