@extends('app')

@section('title', '文書詳細')

@include('navbar')

@section('content')
<br>
<div class="container">

  <div class="col-xs">{{-- タイトル --}}
    <h3 class="h3 card-title">
      <a class="text-dark" href="{{ route('documents.show', ['document' => $document]) }}">
        {{ $document->title }}
      </a>
    </h3>
  </div>

  <br>

  <div class="col-md-4">
    <div>
      <div class="font-weight-bold">{{ $document->user->name }}</div> {{-- ユーザー名を表示 --}}
      <div class="meta-info">
        <div class="font-weight-lighter">{{ $document->updated_at->format('Y/m/d H:i') }}</div>{{-- 更新時間を表示 --}}
      </div>
    </div>
  </div>

  <br>

  <div class="col-xs">
    <div class="buttom">{{-- 本文 --}}
      <h3 class="card-text">
        {{ $document->body }}
      </h3>
    </div>
  </div>

</div>

<br>

@if( Auth::id() === $document->user_id ){{-- 認証ユーザーと文書作成ユーザーが一致するなら表示 詳細に移す？ --}}

<li class="nav-item"></li>
<a type="submit" class="btn btn-primary mt-2 md-2" href="{{ route("documents.edit", ['document' => $document]) }}">
  文書を更新する
</a>
</li>
<li class="nav-item">
  <a type="submit" class="btn btn-block btn-danger mt-2 md-2" data-toggle="modal"
    data-target="#modal-delete-{{ $document->id }}">
    文書を削除する
  </a>
</li>

<style>
  .nav-item {
    display: inline-block;
    margin: 0 10px;
  }
</style>

<!-- modal -->
<div id="modal-delete-{{ $document->id }}" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form method="POST" action="{{ route('documents.destroy', ['document' => $document]) }}">
        @csrf
        @method('DELETE')
        <div class="modal-body">
          {{ $document->title }}を削除します。よろしいですか？
        </div>
        <div class="modal-footer justify-content-between">
          <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
          <button type="submit" class="btn btn-danger">削除する</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- modal -->

@endif

@endsection