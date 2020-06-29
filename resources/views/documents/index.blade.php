@extends('app') {{-- app.blade.php をベースに使うことを宣言 --}}

@section('title', '文書一覧') {{-- app.blade.php の @yirld('title') に対応 --}}

@include('navbar')

@section('content')

<div class="container">
  <div class="card mt-3">
    <div class="card-body d-flex flex-row">
      <a class="nav-link" method="GET" href="{{ route('search.index') }}">文書検索</a>
    </div>
  </div>

  @foreach($documents as $document)

  @include('documents.card')

  @endforeach

</div>

@endsection