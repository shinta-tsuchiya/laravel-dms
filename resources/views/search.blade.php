@extends('app')

@section('title', '検索')

@include('navbar')

@section('content')

{{-- 検索フォーム --}}
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <form class="form-inline">
        <div class="form-group">
          <input type="text" name="keyword" value="{{ $keyword }}" placeholder="文書タイトルを入力">
          <input type="submit" value="検索">
        </div>
      </form>
    </div>
  </div>
</div>

{{-- 文書タイトルの表示 --}}
<div class="container">
  @if(count($documents) > 0)
  <div class="row">
    @foreach($documents as $document)
    <div class="col-md-3">
      {{ $document->title }}
    </div>
    @endforeach
  </div>
  @endif

  {{-- ページネーション機能 --}}
  <div class="paginate">
    {{ $documents->render('pagination::bootstrap-4') }}
  </div>
</div>

@endsection