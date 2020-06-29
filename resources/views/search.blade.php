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
          <input type="submit" value="検索" class="btn btn-info">
        </div>
      </form>
    </div>
  </div>
</div>

{{-- 文書の表示 --}}
<div class="container">
  @if(count($searchs) > 0)
  <li class="row">
    @foreach($searchs as $search)
    <li class="col-md-3">
      {{ $search->title }}
    </li>
    @endforeach
  </li>
  @else
  <div>該当なし</div>
  @endif

<br>
  {{-- ページネーション機能 --}}
  <div class="paginate justify-content-center">
    {{ $searchs->render('pagination::bootstrap-4') }}
  </div>
</div>
@endsection

